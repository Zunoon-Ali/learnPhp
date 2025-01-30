<?php
if(isset($_POST['submit'])){
    // Define allowed file extensions
    $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

    if(!empty($_FILES['upload']['name'])){ // Fix condition to check if file is selected
        // Get file details
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "assets";

        // Ensure the target directory exists
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Create the directory if it doesn't exist
        }

        $target_file = "${target_dir}/${file_name}";

        // Extract file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // Check if the file extension is allowed
        if(in_array($file_ext, $allowed_ext)){
            // Check if the file size is within the allowed limit
            if($file_size <= 100000){
                // Move the uploaded file to the target directory
                if(move_uploaded_file($file_tmp, $target_file)){
                    $message  = '<p style="color:green">File uploaded successfully!</p>';
                } else {
                    $message  = '<p style="color:red">Failed to upload file.</p>';
                }
            } else {
                $message  = '<p style="color:red">The file is too large. Maximum size is 100KB.</p>';
            }
        } else {
            $message  = '<p style="color:red">Invalid file type. Allowed types are: '.implode(', ', $allowed_ext).'.</p>';
        }
    } else {
        $message = '<p style="color:red;">Please choose a file to upload.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>

    <!-- Display the message -->
    <?php echo $message ?? null; ?>

    <!-- File upload form -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <label for="upload">Select an image to upload:</label>
        <input type="file" name="upload" id="upload">
        <input type="submit" value="submit" name="submit">
    </form>

</body>
</html>

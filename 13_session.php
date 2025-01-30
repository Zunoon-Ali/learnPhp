<?php
session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'zunoon' && $password == '1234') {
        $_SESSION['username'] = $username;
        header('Location: /extras/dashboard.php');
        exit(); // Ensure script stops after redirect
    } else {
        echo "Invalid Login Details";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter Username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password"> <!-- Changed to type="password" -->
    </div>
    <div>
        <input type="submit" value="submit" name="submit">
    </div>
</form>

<?php

// echo $_GET['name'];
// echo $_GET['age'];
if(isset($_POST['submit'])){

    echo $_POST['name'];
    echo $_POST['age'];

}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Zunoon&age=10" >Click</a>

<!-- <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?name=Zunoon&age=10">Click</a> -->


<?php
// Generate the link dynamically using $_SERVER['PHP_SELF']
// echo '<a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?name=Zunoon&age=10">Click</a>';
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name= "name" placeholder="Enter Name">
    </div>
    <div>
        <label for="age">Age</label>
        <input type="text" name= "age" placeholder="Enter Age">
    </div>
    <div>
        <input type="submit" value="submit" name="submit">
    </div>
</form>
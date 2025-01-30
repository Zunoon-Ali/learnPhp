<?php

// echo $_GET['name'];
// echo $_GET['age'];
if(isset($_POST['submit'])){

    // $name = filter_input(INPUT_POST ,'name' , FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST ,'age' , FILTER_SANITIZE_SPECIAL_CHARS);;

    $name = filter_var($_POST['name'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $age = filter_var($_POST['age'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

     echo $name;
     echo $age;
}
// if(isset($_POST['submit'])){

//     $name =  htmlspecialchars($_POST['name']);
//     $age = $_POST['age'];
//      echo $name;
// }

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
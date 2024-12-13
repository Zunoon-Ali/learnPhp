<?php
//how to initialize array in PHP
$number = [1,2,3,4,5.3];
$fruit = array('apple', 'orange', 'banana');

// var_dump($number);
// print_r($fruit);
// echo $fruit[1];


//Asscociative Array

$color = [
    1 => 'red',
    2 => 10,
    3 => 23.33,
    0 => "null",
];

$col = [
    "red" => "#fff",
    "blue" => "#f00",
    "green" => "#0ff",
];
// var_dump($col);


// print_r($color);
// echo $color[1];
// var_dump($color);
$info = [
    "first_name" => "Zunoon",
    "last_name" => "Ali",
    "email" => "zunoon@gmail.com",
    "password" => "abc.1234",
];

$persons = [
    [
        "first_name" => "Zunoon",
        "last_name" => "Ali",
        "email" => "zunoon@gmail.com",
        "password" => "abc.1234",
    ],[
        "first_name" => "haider",
        "last_name" => "Ali",
        "email" => "haider@gmail.com",
        "password" => "abc.1234",
    ],[
        "first_name" => "ALi",
        "last_name" => "Ather",
        "email" => "ali@gmail.com",
        "password" => "abc.1234",
    ],[
        "first_name" => "waqar",
        "last_name" => "Ali",
        "email" => "waqar@gmail.com",
        "password" => "abc.1234",
    ]
    ];
    // var_dump(json_encode($persons));
    // var_dump($persons[1]["first_name"]);
    // var_dump($persons);
// print_r($info);
// echo $info['first_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
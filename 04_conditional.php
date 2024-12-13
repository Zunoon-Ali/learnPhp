<?php

$age = 20;

// if($age >= 18){
//     echo 'YOu are old enough to vote';
// }
// else{

//     echo 'sorry , YOu are not';
// }

// $t = date('H');
// if($t < 12){
//     echo 'Good Morning';
// }
// else if($t < 17){
//     echo 'Good Afternoon';}
// else{
//     echo 'Good Evening';
// }
$post = ["post1", "post2", "post3"];
// if(!empty($post)){
//     echo $post[0];
// }else{
//     "no post";
// }
// $firstPost = !empty($post)? $post[0] : "no post";
// echo $firstPost;

// $posts = $post[0] ?? "no post";
// echo $posts;

$favcolor = 'black';

switch ($favcolor) {
    case 'red':
        echo 'your favorite color is red';
        break;
    case 'blue':
        echo 'your favorite color is blue';
        break;
    default:
        echo "your favourite color neither blue nor red";
}

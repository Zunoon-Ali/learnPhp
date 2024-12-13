<?php

// for($i = 0; $i < 10; $i++){
//     echo "number is " .$i .'<br/>';
// }


// $j = 1; // Initialize the variable

// while ($j <= 10) {
//     echo "2 x $j = " . (2 * $j) . "<br/>";
//     $j++;
// }
// $y = 1;

// do{
// echo $y . '<br/>';
// $y++;
// }while($y <= 10);


// $post = ["post1", "post2", "post3"];
// // for($z = 0 ; $z < count($post); $z++){
// //         echo $post[$z] . '<br/>';
// // }

// foreach($post as $index => $posts){
//             echo$index ." ". $posts .'<br/>';

// }

$person = [
    "name" => "zunoon",
    "age" => 20 ,
    "hasMarried" => true
];

foreach($person as $key => $value){
    echo $key. " - ".$value . '<br/>';
}

?>


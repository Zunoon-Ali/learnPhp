<?php

$fruits = ['apple','banana','orange'];

// add to array
$fruits[] = 'stawberry';
array_push($fruits, "malta","cherry");
array_pop($fruits);
array_shift($fruits);
unset($fruits[3]);
$chunks = array_chunk($fruits, 2);
// print_r($chunks);

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];
$arr4 = [...$arr1,...$arr2,...$arr3];

// $arr5 = array_merge($arr1,$arr2,$arr3);

// print_r($arr4);


$a = ["green", "yellow", "red"];
$b = ["apple", "orange", "banana"];

$c = array_combine($a, $b);
// print_r($c);

// $key = array_keys($c);
// print_r($key);
$value = array_values($c);
// print_r($value);


$flip = array_flip($a);
// print_r($flip);

// var_dump($fruits);

$range = range(1,10);
// print_r($range)

$numbers = array_map(function($num){
    return $num;
},$range);

 

// print_r($numbers);

$less5 = array_filter($numbers , fn($number)=> $number <= 5);

// print_r($less5)

$sum = array_reduce($numbers, fn($sum, $number) => $sum + $number, 0);
echo $sum;

?>
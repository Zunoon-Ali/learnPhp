<?php
$y = 12;
function registerUser()
{
    global $y;
    echo $y."\n";
    echo "User Register:\n";
}
registerUser();

function getEmail($name, $domain)
{
    echo "$name@$domain.com\n";
}
getEmail("zunoon2006", "gmail");


function add($num1 = 1, $num2 = 0){
    return $num1 + $num2;
}

$sum = add();
$sum = add(1,2);
echo $sum;
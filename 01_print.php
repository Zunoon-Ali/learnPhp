<?php
// for multiple value print 
echo 'Hello Php', '<br/>', 900, '<br/>',1.2;
echo "Hello Php";
//for single value print
print '<br/>zun';

// print single value or array
print_r('<br/>hello');
print'<br/>';
print_r([1,0.2,3,54]);

//type data type , length and more info
// int a = ;
print'<br/>';
var_dump([1,'a',3.2,'hello',5,true]);
print'<br/>';
var_dump("hello");
print'<br/>';
var_dump(13434);
print'<br/>';
var_dump(true);

// var export for print literal also
var_export(`hello`);
print'<br/>';
var_export("Zunoon");
print'<br/>';
var_export('Ali');
print'<br/>';
var_export(123);
print'<br/>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 Php</title>
    
</head>
<body>
    
    <h1>Hello</h1>
    <h2><?php "zunoon" ?></h2>
    <h3><?php echo"Ali"; ?></h3>
    <h4><?php echo"pirzada"; ?></h4>
    <h5><?= "786" ?></h5>
</body>
</html>
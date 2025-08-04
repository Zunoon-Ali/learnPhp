<?php
// echo "error and exception";

function inverse($x){
    if(!$x){
        throw new Exception('Division by zero.\n');
    }
    return 1/$x;
}
try{
    echo inverse(3) . "\n";
    echo inverse(0) . "\n";

}catch(Exception $e){
    echo 'Caught exception: ', $e->getMessage(), "\n";
}finally{
    echo "finally\n";
}

echo "Hello World\n";
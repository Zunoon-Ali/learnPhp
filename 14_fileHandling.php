<?php

$file = 'extras/user.txt';

if (file_exists($file)) {
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'arham' .PHP_EOL. 'shaheen' .PHP_EOL. 'nabi' .PHP_EOL. 'fateh' .PHP_EOL. 'hamdard';
    fwrite($handle, $contents);
    fclose($handle);
}

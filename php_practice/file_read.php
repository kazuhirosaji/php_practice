<?php

$testFile = "test.dat";

/*
if (!$fp = fopen($testFile, "r")) {
    echo "could not open";
    exit;
}

$contents = fread($fp, filesize($testFile));

var_dump($contents);
fclose($fp);
*/

// $contents = file_get_contents($testFile);
// $contents = file_get_contents("http://www.yahoo.co.jp");
$contents = file($testFile);
var_dump($contents);



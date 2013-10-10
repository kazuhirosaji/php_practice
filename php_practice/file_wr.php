<?php

$testFile = "test.dat";
$contents = "Hello!!\n";

if (is_writable($testFile)) {
    // file open
    if (!$fp = fopen($testFile, "a")) {
        echo "could not open!";
        exit;
    }

    // write file
    if(fwrite($fp, $contents) === false) {
        echo "could not write!";
	exit;
    }
    echo "success<BR>";
    // === : check also data type

    // exit
    fclose($fp);
} else {
    echo "not writable";
    exit;
}


<?php 
    //「txt」が表示される
    $fileName = "C:\hoge\gege\hoge.txt";
    echo pathinfo($fileName, PATHINFO_EXTENSION);

    print "<br />----------------------------<br />";

    //「csv」が表示される
    $fileName = "/hoge/gege/hoge.csv";
    echo pathinfo($fileName, PATHINFO_EXTENSION);

    print "<br />----------------------------<br />";

    //空
    $fileName = "/hoge/gege/hoge";
    echo pathinfo($fileName, PATHINFO_EXTENSION);

    print "<br />----------------------------<br />";

	$path_parts = pathinfo('/www/htdocs/inc/lib.txt');

	echo $path_parts['dirname'], "<BR>";
	echo $path_parts['basename'], "<BR>";
	echo $path_parts['extension'], "<BR>";
	echo $path_parts['filename'], "<BR>";

?>

<?php
//phpinfo();

// string " " or ' '
// num
// (false/true)
// null
// Array
// Object

$message = "Hello world";
$x = 5;
$y = 1.22;
$flag = true;
$n = null;

echo $message;
echo "<BR>";
var_dump($message);
var_dump($x);
var_dump($y);
var_dump($flag);
var_dump($n);

// Teisuu
define("ADMIN_EMAIL", "kazuhirosaji@gmail.com");
define("LIST_COUNT", 5);

echo ADMIN_EMAIL."<BR>";
echo "<BR>";
echo LIST_COUNT."<BR>";

// Enzansi
// 
echo 10 / 3 ."<BR>";
echo 10 % 3 ."<BR>";

echo "hello <BR><BR> $message". "<BR>";

if ($message == "Hellao world"):
    echo "if true";
else:
    echo "if false";
endif;
echo '<BR>';

$signal = "red";

switch($signal) {
	case "red":
		echo "stop";
		break;
	case "green":
	case "blue":
		echo "go";
		break;
	case "yellow":
		echo "caution";
		break;
	default:
		echo "do nothing";
		break;

}
echo "<BR>";

$i = 0;
while ($i < 10) {
	echo "<p>test".$i."</p>";
	$i++;	
}



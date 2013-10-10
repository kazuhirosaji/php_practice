<?php

$br = "<BR>";
// Unix Time Stump since 1970/1/1 00:00:00
var_dump(time());
echo $br;

var_dump(mktime(21, 32, 0, 10, 6, 2013));
echo $br;

var_dump(strtotime("2013/10/7 7:11"));
echo $br;

var_dump(strtotime("last Sunday"));
echo $br;

var_dump(strtotime("22:00"));
echo $br;

echo date("Y-m-d H:i:s").$br;
echo date("Y-m-d H:i:s", strtotime("last monday 8:55")).$br;
echo date("Y-m-d H:i:s", strtotime("last monday 8:55")).$br;
echo date("z");


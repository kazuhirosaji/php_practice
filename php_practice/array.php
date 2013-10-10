<?php

$members = array("tanaka", "sasaki", "kimura", "yoshida", "uchida");

//count
echo count($members)."<BR>";

sort($members);

var_dump($members);
echo "<BR>";

$atstr = implode(", ", $members);
echo $atstr."<BR>";

if (in_array("tanaka", $members)) {
    echo "BINGO!<BR>";
}

var_dump(explode(",", $atstr));

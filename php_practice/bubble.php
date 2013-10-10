<?php
$a = array(7,5,5,6,2,1,0);
// ソート前に確認
echo implode($a)."<br>";
// 昇順にソートを実行！
// 配列数分繰り返す
for($j = 1; $j < count($a); $j++){
    
    for($i = 0; $i < count($a)-$j; $i++){
        
        if($a[$i] > $a[$i+1]){
            $tmpVal = $a[$i];
            $a[$i] = $a[$i+1];
            $a[$i+1] = $tmpVal;
        }
    }
}
// ソート後を確認！
echo implode($a, ",")."<br>";
?>

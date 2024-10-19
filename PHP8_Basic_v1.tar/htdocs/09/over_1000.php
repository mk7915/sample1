<?php
$total = 0;
$sum  = 1;


// 合計値を出力
while ($total <= 1000) {
    $total += $num;
    $num++;
}


// 最後に足した値を出力
echo "合計値: $total<br>";
echo "最後に足した値: " . ($num - 1);
?>
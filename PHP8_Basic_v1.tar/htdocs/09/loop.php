<?php
$loop = 100000000;
$sum  = 0;
// 開始時間を取得
$time_start = microtime(true);
 
for ($i = 1; $i <= $loop; $i++) {
   $sum = $sum + $i;
}
print '1から' . $loop . 'まで足した合計値は' . $sum . '<br>';
// 終了時間を取得
$time_end = microtime(true);
$time = $time_end - $time_start;
echo '実行に要した時間は' . $time . '秒です。';
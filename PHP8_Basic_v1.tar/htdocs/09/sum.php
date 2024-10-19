<?php
// $numberに任意の整数を代入
$number = 100; //ここでは仮に100とします。
 
// 合計を表す変数$sumを準備
$sum = 0;
 
for($i = 1; $i <= $number; $i++){
  // $i が $number を超えるまでの間繰り返す
  // 繰り返しのインデックス $i を $sum に加算
  $sum += $i;
}
// $sumを出力
echo '1から' . $number . 'までの合計は: ' . $sum;
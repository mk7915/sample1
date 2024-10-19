<?php
// 円をドルに換算する関数。
// 円, レート, 少数を何桁残すか
// を指定できる。
function convert_yen_to_dollar(int $yen, int $dollar_rate = 130, int $precision = 2): float{
  return round($yen / $dollar_rate, $precision);
}
 
echo convert_yen_to_dollar(10000, 130, 5);
// 76.92308
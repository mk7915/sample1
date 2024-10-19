<?php
function convert_yen_to_dollar(int $yen): float {
  $dollar_rate = 130;
  // 戻り値を指定
  return round($yen / $dollar_rate, 2);
}
 
// この変数に調べたい金額を代入
$input_yen = 49800;
// 戻り値をそのまま出力
echo $input_yen . '円は' . convert_yen_to_dollar($input_yen) . 'ドルです<br>';
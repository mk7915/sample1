<?php
// 半径は引数で渡す
function calculate_circle_area(int $radius){
  // 円周率は3.14で計算
  $pi = 3.14;
  // 渡された引数を利用して計算
  $area = $pi * $radius * $radius;
  echo '半径' . $radius . 'の円の面積は' . $area . 'です。<br>';
}
 
# 実引数として5を渡す
calculate_circle_area(5);
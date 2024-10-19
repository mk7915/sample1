<?php
function count_sum(int $max): int{
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}
 
$a = 100;
$b = 1000;
$c = 10000;
 
echo '1から' . $a . 'までの合計値は' . count_sum($a) . 'です。<br>';
echo 'また、1から' . $b . 'までの合計値は' . count_sum($b) . 'です。<br>';
echo '最後に、1から' . $c . 'までの合計値は' . count_sum($c) . 'になります。<br>';
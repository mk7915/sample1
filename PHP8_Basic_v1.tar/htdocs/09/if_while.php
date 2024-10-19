<?php
$number = 1000;
 
echo 'if文の場合: 1回限り<br>';
if($number > 100){
  $number /= 2;
  echo $number . '<br>';
}
 
$number = 1000;
 
echo 'while文の場合: 繰り返し<br>';
while($number > 100){
  $number /= 2;
  echo $number . '<br>';
}
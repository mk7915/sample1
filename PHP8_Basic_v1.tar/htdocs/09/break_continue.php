<?php
echo 'breakの場合<br>';
for ($i = 1; $i <= 10; $i++) {
  if ($i === 3) {
    echo '繰り返しを中断します<br>';
    break;
  }
  echo $i . '回目<br>';
}
 
 
echo '<br>';
echo 'continueの場合<br>';
for ($i = 1; $i <= 10; $i++) {
  if ($i === 3) {
    echo '次の繰り返しまでスキップします。<br>';
    continue;
  }
  echo $i . '回目<br>';
}
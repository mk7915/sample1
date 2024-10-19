<?php
 
$english_scores = [98, 38, 89, 84, 54];
$math_scores = [92, 81, 59, 84, 34, 59];
$japanese_scores = [57, 68, 19, 74, 94];
 
$english_sum = 0;
foreach($english_scores as $english_score){
  $english_sum += $english_score;
}
$english_average = round($english_sum / count($english_scores), 2);
 
$math_sum = 0;
foreach($math_scores as $math_score){
  $math_sum += $math_score;
}
$math_average = round($math_sum / count($math_scores), 2);
 
$japanese_sum = 0;
foreach($japanese_scores as $japanese_score){
  $japanese_sum += $japanese_score;
}
$japanese_average = round($japanese_sum / count($japanese_scores), 2);
 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>科目別得点</title>
</head>
<body>
    <h1>科目別得点</h1>
    <p>英語のスコア合計は<?php echo $english_sum; ?>点、平均<?php echo $english_average; ?>点です。</p>
    <p>数学のスコア合計は<?php echo $math_sum; ?>点、平均<?php echo $math_average; ?>点です。</p>
    <p>国語のスコア合計は<?php echo $japanese_sum; ?>点、平均<?php echo $japanese_average; ?>点です。</p>
</body>
</html>
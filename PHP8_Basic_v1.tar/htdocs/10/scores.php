<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>スコア合計と平均値の算出</title>
</head>
<body>
    <h1>
        スコア合計と平均値の算出
    </h1>
    
<?php
// 英語の点数を定義
$english_scores = [765, 820, 440, 530, 900, 960, 735];

// スコアの合計を計算
$total = array_sum($english_scores);

// 配列の要素数を出力
$count = count($english_scores);

// 平均スコアを計算 (少数第2位まで)
$average = round($total / $count, 2);


//ここから追加の数字を用いて計算するためのコード
$plus_scores = array_merge($english_scores, [620, 555, 590]);
// スコア追加の合計を計算
$plus_total= array_sum($plus_scores);
// 配列の要素数を出力
$plus_count = count($plus_scores);
// 平均追加スコアを計算 (少数第2位まで)
$plus_average = round($plus_total / $plus_count, 2);



// 出力
// 合計スコアを出力
echo "スコア合計: $total<br>";

// 平均スコアを出力
echo "スコア平均値: $average<br>";

// 新しい合計スコアを出力
echo "スコア合計（追加）: $plus_total<br>";

// 新しい平均スコアを出力
echo "スコア平均値（追加）: $plus_average<br>";

?>


</body>
</html>
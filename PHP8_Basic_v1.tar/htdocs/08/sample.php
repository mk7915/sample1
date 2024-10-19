<!DOCTYPE html>
<html lang="ja">
<head>
    <title>最大値の判定</title>
</head>
<body>
  <h1>最大値の判定</h1>
  <?php
  // 1-100の範囲の乱数を取得し、変数に代入する
  $randa = mt_rand(1, 100);
  $randb = mt_rand(1, 100);
  $randc = mt_rand(1, 100);

  // 生成された乱数を表示
  echo "<p>\$arand: $randa</p>";
  echo "<p>\$brand: $randb</p>";
  echo "<p>\$crand: $randc</p>";

  // 最大の整数を求める
  $maxValue = max($randa, $randb, $randc);
  
  // 最大の整数を表示
  echo "<p>最大値: $maxValue</p>";
  ?>
</body>
</html>

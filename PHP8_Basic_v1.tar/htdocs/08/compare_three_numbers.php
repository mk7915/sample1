<!DOCTYPE html>
<html lang="ja">
<head>
    <title>最大値の判定</title>
</head>
<body>
  <h1>最大値の判定</h1>
  <p>$arand: <?php echo $randa; ?></p>
  <p>$brand: <?php echo $randb; ?></p>
  <p>$crand: <?php echo $randc; ?></p>
  <p><?php echo $result; ?>最大値。</p>
</body>
</html>

<?php
// 1-100の範囲の乱数を取得し、変数 $rand に代入する
$randa = mt_rand(1, 100);
$randb = mt_rand(1, 100);
$randc = mt_rand(1, 100);


// 生成された乱数を表示
echo "生成された乱数: $randa, $randb, $randc<br>";

// 最大の整数を求める
$maxRand = max($randa, $randb, $randc);

// 最大の整数を表示
echo "最大の整数: $maxRand";
?>


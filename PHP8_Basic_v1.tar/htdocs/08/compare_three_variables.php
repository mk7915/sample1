<!DOCTYPE html>
<html lang="ja">
<head>
    <title>最も大きい変数</title>
</head>
<body>
  <h1>最も大きい変数</h1>
  <p>$arand: <?php echo $randa; ?></p>
  <p>$brand: <?php echo $randb; ?></p>
  <p>$crand: <?php echo $randc; ?></p>
  <p><?php echo $result; ?>最大値。</p>

<?php
// 0-2の範囲の乱数を取得し、変数 $rand に代入する
$a = mt_rand(0, 2);
$b = mt_rand(0, 2);
$c = mt_rand(0, 2);

// それぞれの変数の名前と値を出力する
echo "\$a: $a<br>";
echo "\$b: $b<br>";
echo "\$c: $c<br>";


// 3つの変数が全て同じ値の場合、「全て同じ値です」と出力する
  if ($a === $b && $b === $c) {
      echo "全て同じ値です";
    
  }
// 変数のうち一つが最大値である場合、「変数○が最も大きい」と出力する
  elseif ($a >= $b && $a >= $c) {
      echo "変数 \$a が最も大きい";
  }
  elseif ($b >= $a && $b >= $c) {
      echo "変数 \$b が最も大きい";
  }
  elseif ($c >= $a && $c >= $b) {
      echo "変数 \$c が最も大きい";
  }

// 変数のうち2つが同じ値で最大である場合、「変数○と○が最も大きい」と出力する
  elseif ($a === $b && $a >= $c) {
      echo "変数 \$a と \$b が最も大きい";
  }
  elseif ($a === $c && $a >= $b) {
      echo "変数 \$a と \$c が最も大きい";
  }
  elseif ($b === $c && $b >= $a) {
      echo "変数 \$b と \$c が最も大きい";
  }
  ?>
</body>
</html>

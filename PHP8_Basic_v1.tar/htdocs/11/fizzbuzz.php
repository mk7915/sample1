<!DOCTYPE html>
<html lang="ja">
<head>
    <title>FizzBuzz</title>
    
</head>
<body>
  <h1>FizzBuzz</h1>
 
  <!-- FizzBuzzの出力 -->
  <?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 === 0) {
        echo "Fizz\n";
    } elseif ($i % 5 === 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}
?>
  
</body>
</html>
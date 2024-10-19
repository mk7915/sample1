<?php
function get_fizzbuzz_of(int $number): string{
  if($number % 15 === 0){
    return 'FizzBuzz!';
  }
  if($number % 3 === 0) {
    return 'Fizz!';
  }
  if($number % 5 === 0) {
    return 'Buzz!';
  }
  return $number;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>FizzBuzz</title>
</head>
<body>
    <h1>FizzBuzz</h1>
    <table>
        <?php for($i = 1; $i <= 100; $i++){ ?>
            <?php echo get_fizzbuzz_of($i); ?><br>
        <?php } ?>
    </table>
</body>
</html>
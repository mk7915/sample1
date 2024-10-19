<?php
// 関数の読み込み
require_once 'fizzbuzz_library.php';
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
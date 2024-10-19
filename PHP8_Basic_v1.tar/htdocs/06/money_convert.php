<?php
// 1ユーロは139.64円
$euro_rate = 139.64;
 
// 1ドルは129.96円
$dollar_rate = 129.96;
 
$yen = 1000;
$euro = round($yen / $euro_rate, 2);
$dollar = round($yen / $dollar_rate, 2);
 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>通貨の換算</title>
</head>
<body>
  <h1>通貨の換算</h1>
  <dl>
    <dt>日本円</dt>
    <dd><?php echo $yen; ?>円</dd>
 
    <dt>ユーロ換算</dt>
    <dd><?php echo $euro; ?> ユーロ</dd>
 
    <dt>ドル換算</dt>
    <dd><?php echo $dollar; ?> ドル</dd>
  </dl>
</body>
</html>
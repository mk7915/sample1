<?php
// 定数の定義
define('LANGUAGE', 'Japanese');
 
// 定数は定数名で利用できる
echo '私は' . LANGUAGE . 'を話します<br>';
 
function speak(){
  // 関数内でも定数は利用することができる。
  echo 'I speak ' . LANGUAGE . '<br>';
}
 
speak();
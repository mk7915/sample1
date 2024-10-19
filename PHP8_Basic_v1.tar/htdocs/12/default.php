<?php
function say_hello_name(string $name, int $count = 1){
  // $count回繰り返す。
  for($i = 1; $i <= $count; $i++){
    echo 'hello!' . $name .'さん<br>';
  }
}
 
// デフォルト値を利用
say_hello_name('鈴木');
 
// 二つとも渡す
say_hello_name('山田', 3);
<?php
$text = 'abcde';
 
if (mb_strlen($text) >= 5){
  // 入力文字数が5文字以上ならば
  echo '入力された文字は5文字以上です';
}
 
echo '処理を終了します。';
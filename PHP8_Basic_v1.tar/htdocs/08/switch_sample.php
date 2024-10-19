<?php
$type = 'new';
switch ($type) {
  case 'new':
    echo '商品タイプは「新品」です';
    break;
  case 'new_old':
    echo '商品タイプは「新古品」です';
    break;
  case 'old':
    echo '商品タイプは「中古品」です';
    break;
  case 'junk':
    echo '商品タイプは「ジャンク」です';
    break;
  default:
    echo '正しい商品タイプを指定してください。';
}
 
// 出力例：
// 商品タイプは「新品」です
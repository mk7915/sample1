<?php
// var_dumpを見やすくする設定
ini_set('html_errors', 0);
 
// 整数型の１
$integer = 1;
echo '整数型の var_dump: ';
var_dump($integer);
echo '<br>';
 
// 浮動小数点数型の0.1
$float = 0.1;
echo '浮動小数点数型の var_dump: ';
var_dump($float);
echo '<br>';
 
// 文字列の１
$string = '123';
echo '文字列型の var_dump: ';
var_dump($string);
echo '<br>';
 
// 論理型のtrue
$boolean = true;
echo '論理型の var_dump: ';
var_dump($boolean);
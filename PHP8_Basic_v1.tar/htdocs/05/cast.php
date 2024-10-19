<?php
// var_dumpの結果をみやすくする。
ini_set('html_errors', 0);
 
// var_dump(1.5 + (float)3); と同じ
var_dump(1.5 + 3);
echo '<br>';
 
// var_dump(1.5 + (int)'5ab'); と同じ
var_dump(1.5 + '5ab');
echo '<br>';
 
// var_dump(3 + (int)'5ab'); と同じ
var_dump(3 + '5ab');
echo '<br>';
 
// var_dump(3 + (float)'5.5cd'); と同じ
var_dump(3 + '5.5cd');
echo '<br>';
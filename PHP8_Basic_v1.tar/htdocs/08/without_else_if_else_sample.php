<?php
$number = 18;
 
if ($number % 12 === 0) {
  echo $number . 'は12の倍数です。';
}
 
if ( $number % 12 !== 0 && $number % 6 === 0) {
  echo $number . 'は12の倍数ではありませんが、6の倍数です。';
}
 
if ($number % 12 !== 0 && $number % 6 !== 0 && $number % 3 === 0) {
  echo $number . 'は12の倍数でも6の倍数でもありませんが、3の倍数です。';
}
 
if ($number % 12 !== 0 && $number % 6 !== 0 && $number % 3 !== 0) {
  echo $number . 'は12の倍数でも6の倍数でも3の倍数でもありません。';
}
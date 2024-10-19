<?php
$number = 9;
 
if ($number % 12 === 0) {
  echo $number . 'は12の倍数です。';
} elseif ($number % 6 === 0) {
  echo $number . 'は12の倍数ではありませんが、6の倍数です。';
} elseif ($number % 3 === 0) {
  echo $number . 'は12の倍数でも6の倍数でもありませんが、3の倍数です。';
} else {
  echo $number . 'は12の倍数でも6の倍数でも3の倍数でもありません。';
}
<?php
// 奇数の合計を格納する変数を初期化
$oddSum = 0;

// 1から100までの数値を順番にループ
for ($number = 1; $number <= 100; $number++) {
    // 数値が奇数かどうかを判別
    if ($number % 2 === 1) {
        // 奇数の場合は合計に加える
        $oddSum += $number;
    }
}

// 奇数の合計を出力
echo "1から100までの奇数の合計: " . $oddSum;

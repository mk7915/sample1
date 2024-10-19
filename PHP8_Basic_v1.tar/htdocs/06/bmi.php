<?php
function BMI($height_cm,$weight_kg) {
    //身長をセンチメートル単位で変数に代入しておく
    $height_m = $height_cm / 100;
    //BMIの計算式は BMI ＝ 体重(kg単位) / 身長(m単位)の２乗
    $bmi = $weight_kg / ($height_m ** 2);
    //BMIは小数点第３位四捨五入で表示
    return round($bmi, 3);
}












?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>BMIアプリ</title>
</head>
<body>
 
 
 
</body>
</html>
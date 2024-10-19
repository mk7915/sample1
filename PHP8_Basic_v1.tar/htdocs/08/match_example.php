<?php
$exam_score = 100;
$message = match (true) {
    // このように、値として評価できない「文」は書けない。
    // 値として評価できる「式」だけ書ける。
    $exam_score === 100 => echo 'ご褒美を買ってあげましょう。'; echo '次も頑張ってください';, 
    (略)
};
echo $message;
 
// 出力例：(文法エラー)
// Parse error: syntax error, unexpected token "echo" in ...
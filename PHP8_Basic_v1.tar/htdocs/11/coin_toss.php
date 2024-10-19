<!DOCTYPE html>
<html lang="ja">
<head>
    <title>コインスト</title>
</head>
<body>
  <h1>コインスト</h1>
 
  <!-- コインストの出力 -->
    <?php
    function coin_toss($count) {
    $heads_count = 0;
    $tails_count = 0;

    echo "コイン投げの回数: $count 回\n";
    for ($i = 0; $i < $count; $i++) {
        $result = rand(0, 1) === 0 ? "H" : "T";
        if ($result === "H") {
            echo "\033[91mH\033[0m "; // 赤色で出力
            $heads_count++;
        } else {
            echo "\033[94mT\033[0m "; // 青色で出力
            $tails_count++;
        }
    }

    echo "\n";
    echo "表が出た回数: $heads_count 回\n";
    echo "裏が出た回数: $tails_count 回\n";
}

// 例としてコイントスを100回行う場合
coin_toss(100);
  ?>
</body>
</html>
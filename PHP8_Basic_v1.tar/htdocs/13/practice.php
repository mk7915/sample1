<?php
// ①ここにget_product関数を定義（引数2つ）
function get_product($a, $b) {
    $product = $a * $b;
    return "$a*$b=$product";
} // ユーザー定義関数

// ② get_product_array関数定義（引数３つ）
function get_product_array($a, $start, $end) {
    $product_array = [];
    for ($i = $start; $i <= $end; $i++) {
        $product_array[] = get_product($a, $i);
    }
    return $product_array;
}

// ③ get_product_matrix関数
function get_product_matrix($row_start, $row_end, $col_start, $col_end) {
    $product_matrix = [];
    for ($i = $row_start; $i <= $row_end; $i++) {
        $row = get_product_array($i,$col_start,$col_end);
        $product_matrix[] = $row;
    } // 作成したget_product_matrix関数をここで呼
    return $product_matrix;
}
// 戻り値を変数$product_matrixに格納
$product_matrix = get_product_matrix(1, 9, 1, 9);

    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>九九表</title>
    <style>
        .product_matrix {
            border-collapse: collapse;
        }
        .product_matrix td {
            border: solid 1px black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table class="product_matrix">
        <!-- ここで $product_matrix の内容出力-->
         <?php
        foreach ($product_matrix as $row) {
            echo '<tr>';
            foreach ($row as $cell) {
                echo '<td>' . $cell . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>
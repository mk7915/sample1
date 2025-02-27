<!DOCTYPE html>
<html lang="ja">
<head>
    <title>2次元配列</title>
<style>
  table {
  border-collapse: collapse;
}
th,td {
  border: solid 1px black;
  padding: 3px;
}
 </style>
</head>

<body>
  <h1>
     ２次元配列
  </h1>

 <table>
  <tr>
    <th>id</th>
    <th>性</th>
    <th>名</th>
    <th>年齢</th>
    <th>性別</th>
    <th>住所</th>
  </tr>
  

<?php

$members = [
  [
    'id' => 11,
    'family_name' => '山田',
    'first_name' => '太郎',
    'age' => 35,
    'gender' => '男性',
    'address' => '東京都港区',
  ],
  [
    'id' => 12,
    'family_name' => '佐藤',
    'first_name' => '花子',
    'age' => 28,
    'gender' => '女性',
    'address' => '東京都中央区',
  ],
  [
    'id' => 13,
    'family_name' => '斎藤',
    'first_name' => '次郎',
    'age' => 41,
    'gender' => '男性',
    'address' => '東京都豊島区',
  ],
  [
    'id' => 14,
    'family_name' => '山本',
    'first_name' => '三郎',
    'age' => 52,
    'gender' => '男性',
    'address' => '東京都世田谷区',
  ],
];


// 箇条書きでの表示
foreach($members as $member){
  echo '・' . $member['family_name'] . ' ';
  echo '' . $member['first_name'] . ': ';
  echo '' . $member['address'] . ' ';
  echo '' . $member['age'] . '才<br>';
}

// ------------------------------------------------

// テーブルでの表示
foreach ($members as $member) {
      echo '<tr>';
      echo '<td>' . $member['id'] . '</td>';
      echo '<td>' . $member['family_name'] . '</td>';
      echo '<td>' . $member['first_name'] . '</td>';
      echo '<td>' . $member['age'] . '</td>';
      echo '<td>' . $member['gender'] . '</td>';
      echo '<td>' . $member['address'] . '</td>';
      echo '</tr>';
    }
    ?>
  </table>



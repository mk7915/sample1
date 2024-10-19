<?php
$members = [
  [
    'id' => 12,
    'name' => '山田太郎',
    'age' => 35,
    'gender' => '男性'
  ],
  [
    'id' => 13,
    'name' => '佐藤花子',
    'age' => 23,
    'gender' => '女性'
  ]
];
foreach($members as $member){
  echo '名前: ' . $member['name'] . '<br>';
  echo '年齢: ' . $member['age'] . '<br>';
}
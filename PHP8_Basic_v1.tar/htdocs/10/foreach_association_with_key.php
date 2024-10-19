<?php
$member = [
  'id' => 12,
  'name' => '山田太郎',
  'age' => 35,
  'gender' => '男性'
];
 
foreach($member as $key => $value){
  echo $key . 'は' . $value . 'です<br>';
}
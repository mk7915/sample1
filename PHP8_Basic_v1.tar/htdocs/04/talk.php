<?php
echo 'こんにちは！PHPです。' . "\n";
 
echo 'あなたのお名前を教えてください: ';
 
$name = trim(fgets(STDIN)); // 不要な改行を削除。
echo 'はじめまして!' . $name . 'さん' . "\n";
 
echo $name . 'さんの趣味は何ですか？: ';
$hobby = trim(fgets(STDIN));
echo $name . 'さんは' . $hobby . 'がお好きなんですね! 私もです！' . "\n";
echo $name . 'さんとは趣味が合いますね！' . "\n";
echo $name . 'さん！これからも仲良くしてくださいね！' . "\n";
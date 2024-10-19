<?php
// 自分の苗字を代入
$from_family_name = '[自分の苗字]';
 
// 自分の名前を代入
$from_first_name = '[自分の名前]';
 
// 相手の苗字を代入
$to_family_name = '[相手の苗字]';
 
// 相手の名前を代入
$to_first_name = '[相手の名前]';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>テンプレートメール作成</title>
</head>
<body>
  <h1>テンプレートメール作成</h1>
 
 
  <dl>
    <!--件名テンプレートを出力-->
    <dt>件名</dt>
    <dd><?php echo $to_family_name; ?>様にセールのお知らせです。</dd>
 <!--テンプレートに各変数を当てはめて出力-->
    <dt>本文</dt>
    <dd>
      <pre>
 
<?php echo $to_family_name; ?> <?php echo $to_first_name; ?> 様
 
<?php echo $to_family_name; ?>さん、こんにちは！スタイルストアCCの<?php echo $from_family_name; ?>です。
 
今回はお得意様限定のお得なお知らせです。
 
12/7 から待ちに待った年末大感謝セールが始まります。
お得な商品をたくさん取り揃えてみなさまをお待ちしておりますが、毎年「良い商品があったのに、初日に行っても売り切れてしまっていた。。」というご不満の声が寄せられていました。
 
セールの時だけお越しいただくお客様がお得意様よりも先に狙っている商品を購入されて売り切れてしまう、ということを避けるために、本年度から「お得意様向けのプレセール」を行うことになりました！
 
いつもお買い上げいただいている<?php echo $to_family_name; ?>様がご購入を検討されている商品がございましたら、ぜひプレセールを活用して、売り切れる前にお買い求めいただければ幸いです。
 
プレセールでの販売価格はセール期間と同一です。さらに、日頃ご愛顧いただいている<?php echo $to_family_name; ?>様にはこのメールの末尾にセール価格からさらに10%引きのクーポンを用意させていただきました。
 
ぜひこの機会をご活用いただき、<?php echo $to_family_name; ?>様がご検討中の商品をお得にお買い求めくださいね！
 
クーポンコード: SUMMER10
 
スタイルストアCC
https://xxxxxxxxxxxxxxxx.co.jp/
担当 <?php echo $from_family_name; ?> <?php echo $from_first_name; ?>
TEL 03-xxxx-xxxx
 
      </pre>
    </dd>
  </dl>
</body>
</html>
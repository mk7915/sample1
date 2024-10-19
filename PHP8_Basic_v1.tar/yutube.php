<?php
echo 'こんにちは'; //コメント

$temp = 1; //変数tmpに１を代入
echo $tmp; //1

$foo = "PHP";

$i = 1;
$x = "PHP";

//変数展開
echo "第{$i}回{$x}入門講座"; // 第１回PHP入門講座
echo '第{$i}回{$x}入門講座'; // ’はエラー（

var_dump(6); //int(6)
var_dump("6");//string(1) "6"

 //比較 bool型
var_dump(1 == 1);


$score = 90;
    //８０点以上の場合の処理
if($score >= 80) {
    echo "合格です";
    }elseif ($score >= 70) {
    // 70-90点の場合
    echo  "惜しい";
    }else { 
        // それ以下
        echo "頑張りましょう";
    }
    
    
    
    
class Cat {
    private $name;
    private $weight;
    
public function __construct($name, $weight)
{
    $this->name = $name;
    $this->weight = $weight;
}

public function eat ($food) {
    $this->weight += 1;
    echo "体重: {$this->weight)kg";
}

//インスタンスの作成
$cat1 = new Cat("一郎", 5);
$cat2 = new Cat("二郎", 3);

$cat1->eat（"魚"); //体重６KG
$cat2->eat（"魚"); //
$cat3->eat（"魚"); //

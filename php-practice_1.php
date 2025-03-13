<?php
// Q1 変数と文字列
$name='山崎';
echo  "私の名前は「 $name 」です。"."\n";

// Q2 四則演算
$num= 5*4;
echo $num."\n";
echo $num/2 ."\n";

// Q3 日付操作
echo date('現在時刻はY年m月d日 H時i分s秒です')."\n";

// Q4 条件分岐-1 if文
 $device='mac';
 if ($device==='windows'||$device==='mac'){
       echo "使用OSは $device です。"."\n";
}
else { 
    echo 'どちらでもありません。'."\n";
};

// Q5 条件分岐-2 三項演算子
$age =20;
$userage = ($age < 18) ? '未成年です。' : '成人です。'."\n" ;
echo $userage;

// Q6 配列
$kanto = ['東京都','神奈川県','栃木県','千葉県','埼玉県','群馬県','茨城県','愛知県','大阪府'];
echo ($kanto[2]).'と'.($kanto[3]).'は関東地方の都道府県です。'."\n";
$kencho=[
    $kanto[0]=>'新宿区',
    $kanto[1]=>'横浜市',
    $kanto[2]=>'宇都宮市',
    $kanto[3]=>'千葉市',
    $kanto[4]=>'さいたま市',
    $kanto[5]=>'前橋市',
    $kanto[6]=>'水戸市',
    $kanto[7]=>'名古屋市',
    $kanto[8]=>'大阪市',
];

foreach ($kencho as $key=>$value){
echo $value."\n";
}

// Q8 連想配列-2
foreach ($kencho as $key=>$value){
if($key===$kanto[4]){
echo $key.'の県庁所在地は、'.$value.'です。'."\n";
}}

// Q9 連想配列-3
foreach ($kencho as $key=>$value){
    if($key===$kanto[7]||$key===$kanto[8]){
        echo $key.'は関東地方ではありあせん'."\n";
    }
    else{
        echo $key.'の県庁所在地は、'.$value.'です。'."\n";
    }
}

// Q10 関数-1
function hello($name){
    echo $name.'さん、こんにちは。'."\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price){
    $taxInPrice=$price*1.1;
    echo $price.'円の商品の税込価格は'.$taxInPrice.'です。'."\n";
}
calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num){
    if($num%2===0){
        echo $num.'は偶数です。'."\n";}
        else{
            echo $num.'は奇数です。'."\n";
        }
    }
distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($score){
    switch($score){
        case'A':
        case'B':
            echo '合格です。'."\n";
        break;
        case'C':
            echo'合格ですが追加課題があります。'."\n";
        break;
        case'D':
            echo'不合格です。'."\n";
        break;
        default:
            echo'判定不明です。講師に問い合わせてください。'."\n";
        break;
    }
}

evaluateGrade('C');
evaluateGrade('F');

?>
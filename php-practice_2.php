<?php
// Q1 tic-tac問題
$x=4;
$y=5;
$x=$x*$y;
for($i=0;$i<=100;$i++){
    if($i%$x===0){
        echo 'tic-tac'."\n";
    }
    else if($i%$x===0){
        echo 'tic'."\n";
    }
    else if($i%$y===0){
        echo 'tac'."\n";
    }
    else{
        echo $i."\n";
    }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
//問題1
echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。'."\n";

//問題2
foreach($personalInfos as $key=>$value){
    
    echo $key+1 .'番目の'.$value['name'].'のメールアドレスは'.$value['mail'].'で、電話番号は'.$value['tel'].'です。'."\n"
    ;
}

//問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $key=>$value){
    $personalInfos[$key]['age']=[$ageList[$key]];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($gengo)
    {
        //echo '授業に出席しました。';
        echo $this->studentName .'は'.$gengo.'の授業に参加しました。学籍番号：'.$this->studentId.'です。'."\n" ;
    }
}

$gakuseki =new student(120,'山田');
echo '学籍番号'.$gakuseki->studentId .'番の生徒は'.$gakuseki->studentName.'です。'."\n";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date =new DateTime();
$date->modify("-1 months");
echo $date-> format('Y-m-d');
//問題2
$mae =new DateTime('1992-04-25');
$sa = $date-> diff($mae);
echo $sa-> format('あの日から%a日経過しました。');


?>
<?php

/*1. $nameに自分の名前を代入し、if文で$nameが自分の名前なら「私は自分の名前です」、
そうでなければ「自分の名前ではありません」と表示する。*/
$name = "Takayuki";

if($name == "Takayuki") {
    echo "私はTakayukiです";
} else {
    echo "私はTakayukiではありません";
}


//2. for文で1から10000までの合計の値を表示する。
$total = 0;

for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;


//3. $fruitsに配列でフルーツを5個代入し、foreach文で表示する。
$fruits = array("イチゴ","オレンジ","リンゴ","メロン","マンゴー");

foreach($fruits as $fruit) {
    echo $fruit . "<br>";
}


//4. バグ修正
//　for文の初めの値を定義する 
$start = 1;
//　for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++) {
    
    if($i % 5 == 0) {
        echo $i;
    }
}


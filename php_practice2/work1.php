<?php 

//1. 変数$aに3、$bに7を代入し、$a + $bの結果を表示する。
$a = 3;
$b = 7;

echo $a + $b;


//2. 配列$array_monthに1月〜12月の文字列を代入し、echoで8月を表示。
$array_month = ["１月","2月","3月","4月","5月","6月","7月","8月","9月",
"10月","11月","12月"];

echo $array_month[7];


//3. 変数$helloに"Hello,"、$nameに自分の名前、$worldに"`s World!"と表示。
$hello = "Hello,";
$name = "Takayuki";
$world = "`s World!";
echo $hello . $name . $world;


//4. $tech_boostに"tech"という文字列ある。複合演算で「tech boost」と表示。
$tech_boost = "tech";
$tech_boost .= " boost";
echo $tech_boost;


//5. バグ修正
$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calendar["December"];


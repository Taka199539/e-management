<?php

// 変数integerに20を代入
$integer = 20;

// 変数$stringに"abc"を代入
$string = "abc";

// 変数$integerを出力
echo $integer;
// => 20　と表示される

// 変数$stringを出力
echo $string;
// => abcと表示される

// 変数$integerと10を足した結果を変数$new_integerに代入する
$new_integer = $intger + 10;

// 関数　$new_integerを出力する
echo $new_integer;
// => 30と表示される

// 変数型
$red_fruit = "APPLE";
$yellow_fruit = "Banana";

//変数$arrayに配列[2017,2018,2019,2020] を代入
$array = [2017,2018,2019,2020];

// $arrayから2017を取り出して表示する
echo $array[0];

// $arrayから2019を取り出して表示する
echo $array[2];

// $array2にspring, summer, autumn, winterを代入する
echo $array2 = ["spring","summer","autumn","winter"];
// $array2からautumnを取り出して表示する
echo $array2[2];
// => autumnと表示される

// $animalsという連想配列を定義する
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥",
];

// $animalsから"猫"を取り出して表示する
echo $animals["cat"];
// => 猫と表示される

// $animalsから"鳥"を取り出して表示する
echo $animals["bird"];
// => 鳥と表示される

// 論理型
// $resultにtrueを代入する
$result = true;

// もし$resultがtrueであれば、成功しました。が表示される
// もしそうでなければ、失敗しました　が表示される
if($result == true) {
    echo "成功しました。";
} else {
    echo "失敗しました。";
}
// => 成功しまhした。が表示される

// 二項演算
// +は数値を加算する
$value  = 6;
echo $value + 2;
// => 8が表示される

// -は数値を減算する
$value = 6;
echo $value - 2;
//=> 4が表示される

// *は数値を積算する
$value = 6;
echo $value * 2;
// 12が表示される

// %は数値を除算する
$value = 6;
echo $value % 2;
// => 3が表示される

// . は文字を連結する
$value = "AAA";
echo $value . "BBB";
// => "AAABBB"が表示される


//　論理演算
// == は左項と右項が等しいか判定する
$result = 10;
$result = $value == 20;
var_dump($result);
// => bool(false)が表示される

// < は左項が右項より小さいか判定する
$value = 10;
$result = $value < 20;
var_dump($result);
//=> bool(true)が表示される

// >は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
// => bool(false)が表示される

// === は右項と右項��同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);
//=> trueが表示される

$result = $a === $b;
var_dump($result);
// falseが表示される


// 単項演算
// ++は変数の値をひとつ増加させる
$value = 10;
// $valueに1を足した結果が$valueに代入される
++$value;
echo $value;
//=>11 と表示される

// - は変数の値をひとつ減少させる
$value = 10;
// $valueから1引いた結果が$valueに代入される
--$value;
echo $vlaue;
// =>9と表示される

// +=は変数の値を増加させる
$value = 10;
// $valueに5足した結果が$valueに代入される
$value += 5;
echo $value;
//=> 15と表示される

// -=は変数の値を減少させる
$value = 10;
// $valueに5足した結果が$valueに代入される
$value -= 5;
echo $value;
//=> 5と表示される

// .= は変数に文字列を連結する
$value = 'apple';
$value .= 'orange';
echo $value;
//=> apple orangeと表示される



//三項演算
//(論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、:より左側が代入され、()内の結果が間違っている場合は:より左側が代入される
$result = ($value < 20) ? '$value　は　20　より小さい':
'$value は　20　と等しいかまたは大きい';

echo $result;
//=> $result は　20 より小さい　と表示される

// (論理演算) ? (論理演算結果が真の時の値) : (論理演算結果が偽の時の値)
$value = 10;
// ()内の結果が正しい場合、:より左側が代入され、()内の結果が間違っている場合は:より右側が代入される
$result = ($value < 20) ? "$value は　20　より小さい" :
    "$value は　20 と等しいかまたは大きい";
    
echo $result;
//=> 10　は　20 より小さい　と表示される


// if,else,else if文による条件分岐
$height = 160;
// もし $height が 150　未満の数値なら、{ }のなかが実行される
if($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
}

//=> 何も表示されない

$height = 160;
// もし$heightが150未満の数値なら、ifのあとの{ }の中のコードが実行される
// それ以外なら、else のあとの{ }の中のコードが実行される

if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}

//=> "ご乗車になれます。"が表示される

$height = 230;

// もし　$height が150 cm 未満の数値なら、ifのあとの{ }の中のコードが実行される
// それ以外なら、else のあと��� { }の中のコードが実行される
if($height < 150) {
    echo "150cm　未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200cm　以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}
// => "200cm　以上の方はご乗車できません。"が表示される


// switchによる複数条件分岐　

$weekday = "月曜";
/* $weekdayが、月曜だったら「可燃ごみの日です。」、水曜だったら「資源ごみの日です」、
それ以外なら「回収はありません。」と表示される。*/
switch ($weekday) {
    case "月曜";
       echo "可燃ごみの日です。";
       break;
    case "水曜";
       echo "資源ごみの日です。";
       break;
    default:
       echo "回収はありません。";
       break;
}
// =>可燃ごみの日です。が表示される


// 様々な条件の比較
$a = 3;
$b = 3;
$c = 3;

// $a と $bが等しい時にtrue、そうでなければfalseを返す。
var_dump($a == $b);
//=> bool(true)が表示される。

// $aと$bが等しくない時に true
var_dump($a != $b);
//=> bool(false) が表示される

// $aが$bより大きい時にtrue、そうでなければfslseを返す。
var_dump($a > $b);
//=> bool(false)が表示される

// $aが$b以上の時true、そうでなければfalseを返す。
var_dump($a >= $b);
//=> bool(true)が表示される

// $aが$bより小さい時true、そうでなければfalseを返す
var_dump($a < $b);
// => bool(false)が表示される

// $aが$bより小さいか、または等しい時にtrue、そうでなければfalseを返す
var_dump($a < $b);
//=> bool(true)が表示される

// $aが$cとデータ型が等しく、かつ値も等しいときにtrue、そうでなければ falseを返す
var_dump($a === $c);
// => bool(false)が表示される

// $aが$cとデータ型が等しくないか、もしくは値が等しくない時にtrue,そうでなければfalseを返す
var_dump($a !== $c);
// => bool(true)が表示される


// for文による繰り返し処理
for($i = 0; $i < 10; $i++) {
    echo $i;
}

// 1~100までを繰り返し処理で足す
$total = 0;
echo $total;
//=> 0と表示される

// $iが0から始まり、$iが100以下の繰り返し処理を行う
for($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;
//=> 5050と表示される


#配列の全ての要素を出力
$fruits = array("apple","orange","lemon");

echo count($fruits);
//=> 3と表示される

for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
// =>　要素はapple
// =>  要素はorange
//=>   要素はlemon
//=>   と表示される


// foreachによる順次処理
$animals = array("dog","cat","panda");
// $animals から一つずつ要素を取り出して、$animal に代入される

foreach($animals as $animal) {
    echo "要素は" . $animal;
    echo "\n";
}

//=> 要素はdog
//=> 要素はcat
//=> 要素はpanda
//=> と表示される


// 配列　継承
// 親クラス
class Animal {
   private $name = '';
   
   public function getName() {
       return $this->name;
   }
   public function setName(string $name) {
       $this->name = $name;
   }
}

// 子クラス
class Dog extends Animal {
    public function call() {
        return 'わんわん';
    }
}

class Cat extends Animal {
    public function call() {
        return 'にゃーにゃー';
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->setName('ぽち');
$cat->setName('たま');

echo $dog->getName()."の鳴き声は".$dog->call()."です\n";
echo $cat->getName()."の鳴き声は".$cat->call()."です\n";



// 親クラス
class Character {
    private $name = ' ';
    
    public function getName() {
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
}


// 子クラス
class Warrior extends Character {
    public function attack() {
         return '剣術'   ; 
    }
}

class Wizard extends Character {
    public function attack() {
        return '魔法';
    }
}

$warrior = new Warrior;
$wizard = new Wizard;

$warrior->setName('ライアン');
$wizard->setName('アリーナ');

echo $warrior->getName()."の攻撃は".$warrior->attack()."です\n";
echo $wizard->getName()."の攻撃は".$wizard->attack()."です\n";
echo "シャララララーン！！";


// fizzbuzz
function fizz($i)
{
    return $i % 3 ? null : 'Fizz';
}

function buzz($i)
{
    return $i % 5 ? null : 'Buzz';
}

function fizzbuzz($i)
{
    return $i % 15 ? null : 'FizzBuzz';
}

for ($i = 1; $i <= 100; $i++) {
    echo fizzbuzz($i) ?? fizz($i) ?? buzz($i) ?? $i, PHP_EOL;
}


// フィボナッチ数
$max_num= trim(fgets(STDIN));
if(!(max_num + 0 > 3) ) {
    $max_num = 5;
}


$num = 0;
$array = null;
echo "#### fb1 ####", PHP_EOL;
$trim_start = microtime(true);
print_r(fb1($array, $num, $max_num));
echo PHP_EOL;
echo microtime(true) - $time_start, "s".PHP_EOL;
echo PHP_EOL;

/*
echo "#### fb2 ####", PHP_EOL;
$time_start = microtime(true);
print_r( fb2($max_num) ) ;
echo PHP_EOL;
echo microtime(true) - $time_start ,"s". PHP_EOL;
echo PHP_EOL;
*/

function fb1($array,$num,$max_num) {
    if($num > $max_num) {
         return $array;
         exit;
    }
    if(!isset($array[$num-1]) || !isset($array[$num-2])) {
        $array[] = 1;
    } else {
        $array[] = $array[$num-1] + $array[$num-2];
    }
    return fb1($array,$num+1,$max_num);
}

function fb2($n) {
    if($n < 2) return $n;
    return fb2($n - 2) + fb2($n - 1);
}



//フィボナッチ数F38を求める
// by satosystems
// http://d.hatena.ne.jp/satosystem/20121228/1356655565
function fib1($n) {
    if ($n < 2) { return $n;  }
    return fib1($n - 2) + fib1($n - 1);
}

// by Dan Kogai
// http//blog/livedoor.jp/dankogai/archives/50958771.html
function fib2($n) {
    if($n < 2){ return $n; }
    return fib2_sub(1, 1, $n);
}
function fib2_sub($a,$b,$c) {
    if($c <= 2){ return $a; }
    return fib2_sub($a+$b, $a, $c-1);
}

// by NurseAngel
function fib3($n) {
    $fib0 = 0;
    $fib1 = 1;
    $ret = 0;
    for($i=0; $i<$n; $i++) {
        $ret = $fib1;
        $fib1 = $fib0 + $fib1;
        $fib0 = $ret;
    }
    return $ret;
}

// by C言語による最新アルゴリズム辞典
function fib4($n){
    return floor( pow((1+sqrt(5))/2, $n) / sqrt(5) + 1/2);
}


//素数配列
function sosu($a) {
    $s = $a[0];
    if($s>sqrt(end($a))) return $a;
    $b = array_values(array_filter($a,function($v)use($s){
       return $v%$s!=0;
    }));
    return array_merge(array($s),sosu($b));
}

echo join(",",sosu(range(1,100-1))); // 100未満の素数を表示


// 双子素数
function disp($a,$f){
    foreach($a as $v) printf("%d,%d",$v-$f,$v);
    echo "\n";
}

function twin($f,$c){
    $loop = function($a,$j)use(&$loop,$f) {
      $k = array_filter($a,function($x)use($j){return $s%$x==0;});
      if(count($k)==0) {
          $a[] = $j;
          $h = $j-$f;
          $g = array_filter($a,function($x)use($h){return $x==$h;});
          if(count($g)>0)return $a;
      }
      return $loop($a,$j+1);
    };
    $r = array_reduce(range (0,$c-1),function($m,$n)use(&$loop) {
        $x = $loop($m[0],end($m[0])+1);
        return array($x,array_merge($m[1],array(end($x))));
    }); array(array(2),array());
    disp($r[1],$f);
}

twin(2,10); // 双子素数を10組表示
twin(4,10); // いとこ素数を10組表示
twin(6,10); // セクシー素数を10組表示



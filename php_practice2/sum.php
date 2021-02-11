<?php 

// 関数
//　厳密な関数の定義
// 仮引数と引数
// 1~1$maxまでを足して 結果を返す関数
function sum($max) {
    $result = 0;
    
    // $iは1から始まり、$maxより大きくなるまでループする
    for($i = 1; $i <= $max; $i++) {
        $result += $i;
    }
    
    return $result;
}

//関数を実行
echo sum(100);


// 戻り値
// 1から100までを順番に表示する関数
function print_number() {
    
    for($i = 0; $i < 100; $i++) {
        echo $i;
    }
}


//ビルトイン関数
// strlen 文字の長さを取得
$string = "ABCDEF";
echo strlen($string);
// => 6と表示される

// str_replace 文字を置換する

$string = "I love Ruby";

// Rubyという文字列をPHPに置換する
$new_string = str_replace("Ruby","PHP",$string);

echo $new_string;
//=> I Love PHP!

$array = array(1,2,3,4,5,6,7,8,9,10);
echo count($array);
// => 10と表示される

// asort, arsort　配列をソートする
$array = array(2,5,9,7,3,1,8,6,4);

// 配列を昇順（小さい順）にソートする
asort($array);
// print_rで表示する
print_r($array);
//=> Array
//=> (
//=>     [5] => 1
//=>     [0] => 2
//=>     [4] => 3
//=>     [8] => 4
//=>     [1] => 5
//=>     [7] => 6
//=>     [3] => 7
//=>     [6] => 8
//=>     [2] => 9
//=> )
//=> と表示される。

// $array を降順(大きい順)にソートする
arsort($array);
// print_rで表示する
print_r($array);

//=> Array
//=> (
//=>     [2] => 9
//=>     [6] => 8
//=>     [3] => 7
//=>     [7] => 6
//=>     [1] => 5
//=>     [8] => 4
//=>     [4] => 3
//=>     [0] => 2
//=>     [5] => 1
//=> )
//=> と表示される


// Ex: php 比較演算子[==] と[===]の違い
$a = 120;
$b = "120abcer1ere";

if($a == $b) {
    echo "true",PHP_EOL;
} else {
    echo "false",PHP_EOL;
}

$a = "120abcer1ere";

var_dump($b);
var_dump((int)$b);

// <比較演算子'=='を使用した場合>
$a = 120;
$b = "120abcer1ere";

if($a == $b) { //自動キャストされるので、「120=120」の比較になりtrueが出力される
   echo "true",PHP_EOL;
} else {
    echo "false",PHP_EOL;
}


// <比較演算子'==='を使用した場合>
$a = 120;
$b = "120abcer1ere";

if($a === $b) { //自動でキャストされないので「120 = 120abcer1ere」の比較になりfalseが出力される。
    echo "true",PHP_EOL;
} else {
    echo "false",PHP_EOL;
}


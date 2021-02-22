<?php

//1. 引数に数値を指定、実行すると数値を２倍にして返す関数を作成。
$num = 100;

function times($num) {
    return $num * 2;
}

echo times(100);


//2. $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数を作成。
$a = 10;

$b = 20;

function sum($a, $b) {
    return $a + $b;
}

echo sum(10,20);


/*3. $arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すと、
その要素を全てかけた結果を返す関数を作成。*/

function product($arr) {
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    
    return $result;
}

echo product(array(1,3,5,7,9,));


//4. 応用プログラム
function max_array($arr) {
    
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($max_number < $a) {
            $max_number = $a;
        }
    }
    
    return $max_number;
}

echo max_array(array(12,4,6,8,10,2,));



//5. ビルトイン関数の用途

// strip_tagsでHTMLタグを取り除く。

$str = '<p>Hello,<p><!--sample--> <a href="#">PHP</a>';
echo strip_tags($str);
echo "\n";

// <a>タグは許可
echo strip_tags($str, '<a>');


// array_pushで1つ以上の要素を配列の最後に追加する。

$animals = ['bird','fox','dog',];

//要素を追加
array_push($animals,'cat','snake');

print_r($animals);


// array_mergeでひとつ、あるいは複数の配列を結合する。

$fruits1 = ['イチゴ','バナナ','メロン',];

$fruits2 = ['パイナップル','リンゴ',];

$fruits3 = ['グレープ','マンゴー',];

//　配列を結合
$fruits_merge = array_merge($fruits1, $fruits2, $fruits3);

print_r($fruits_merge);


// timeで現在のタイムスタンプを返す。

$nextWeek = time() + (7 * 24 * 60 * 60);

echo 'Now:         '. date('Y-m-d') ."\n";
echo 'Next Week:  '. date('Y-m-d',$nextWeek) ."\n";


// mktimeで日付をUnixのタイムスタンプとして取得する。

$time = mktime(3,15,10);
var_dump(date(' Y年m月d日h時i分s秒',$time));
print_r('<br/>');


// date関数でローカルの日付、時刻を書式化する。

date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") ."\n";

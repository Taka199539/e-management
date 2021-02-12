//課題1.　promptで入力した値から「正の数」、「負の数」を判定し、alertする処理

var answer = prompt('数字を入力してください');

if (answer >= 0) {
    alert('正の数');
} else if(answer <= 0) {
    alert('負の数');
} 

//課題２. 1.で数値以外が入力された場合には「数値を入力してください」とalertする処理

var answer = prompt('数字を入力してください');

if (answer >= 0) {
    alert('正の数');
} else if(answer <= 0) {
    alert('負の数');
} else {
    alert('数値を入力してください');
}

//課題3.  配列に'パンダ','ライオン', 'キリン'を定義し、while文で全て表示する処理

var animals = ['パンダ', 'ライオン', 'キリン'];
var i = 0;

while (true) {
    if (i >= animals.length) {
        break;
    }
    alert(animals[i]);
    i++;
}

//課題4. 3.でwhile文より前にpromptでキー入力し、その入力した内容が'ライオン'の場合に処理を中断


var animals = ['パンダ', 'ライオン', 'キリン'];
var i = 0;

var answer = prompt('パンダ、ライオン、キリンの中から選択する');

while (i < animals.length) {
    if (answer == 'ライオン') {
        alert('ライオン');
        break;
    }
}



//課題5. 4で中断した際、’ライオン'の添字も'alert'するように変更。

var animals = ['パンダ', 'ライオン', 'キリン'];

var i = 0;

var answer = prompt('パンダ、ライオン、キリンの中から選択する');

while (i < animals.length) {

    i++;

    if (answer == 'ライオン') {
        alert(answer + '[' + i + ']');
        break;
    }

    alert(animals[i]);
}

//課題6. オブジェクト変数の配列の形式で、動物と体重を表現する

var  animals = [
    {'name' : 'パンダ', 'weight' : 150},

    {'name' : 'ライオン', 'weight' : 200},

    {'name' : 'キリン', 'weight' : 800},

];


alert('パンダは' + animals[0].weight + 'kgです');
alert('ライオンは' + animals[1].weight + 'kgです');
alert('キリンは' + animals[2].weight + 'kgです');

//課題7. 6.でpromptで入力した動物名の体重をalertするように変更

var animals = [
    {'name' : 'パンダ', 'weight' : 150},

    {'name' : 'ライオン', 'weight' : 200},

    {'name' : 'キリン', 'weight' : 800},

];

var  animal_weight
var animal_name = prompt('パンダ、　ライオン、キリンを入力');

for (i=0; i < animals.length; i++) {
    if (animals[i].name == animal_name) {
        animal_weight = animals[i].weight
    }
}

alert(animal_weight + 'kgです');



//課題8. 縁の半径を入力するとその面積を返す関数を作り、その結果をalertする。

function calc(x)  {
return x * x * 3.14;
}
var answer = prompt('半径を入力する');
    alert (calc(answer));

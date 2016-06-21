<?php
print '<pre>';
//var_dumpは値の情報を出力する
//文字列の最初の部分に数値データがあるとこの値が演算に使用される
var_dump(1 + '10.5');//float(11.5)
var_dump(1 + '-1.3e3');
var_dump(1 + 'Hello3');//int(1)
var_dump(1 + '10th');//int(11);
var_dump('10.0 by' + 1.0); //float(11)
print '</pre>';

?>

<?php
//強制的な型変換(キャスト)
//
print '<pre>';

var_dump((int)123.45);//int(123);
var_dump((int)true);//1
var_dump((int)false);//0
var_dump((string)true);//"1"
var_dump((string)false);//""
var_dump((array)100);
//array(1){
//[0] => int(100)
//}

$array = (array)100;
//スカラー型から配列型へ変換した場合は対象が数値、文字列、論理型どれであっても要素が1つの配列が作られる
print "$array[0]";//100
var_dump($array[1]);//NULL

print '</pre>';

//式　結果として値を返すもの
//演算子　オペレーター　四則演算
//オペランド 操作される側、被演算子(変数、整数リテラル、文字列リテラル)

?>


<?php

$data = array(

'name' => 'モリタ',
'age' => 35,
'mail' => 'kenjimrite@',

);

$data2 = array(
  'zipcode' => '123--00',
  'city' => 'kuki',
  'age' => 27
);
$result = $data + $data2;

$ary1 = array(1,2,3);
$ary2 = array(4,5,6);
$result2 = $ary1 + $ary2;

//配列同士の加算は左側のキーに存在しない要素を右側から取得して左に追加する
print_r($result);//Array ( [name] => モリタ [age] => 35 [mail] => kenjimrite@ [zipcode] => 123--00 [city] => kuki ) 123--00

//要素2は無視される
print_r($result2);//Array ( [0] => 1 [1] => 2 [2] => 3 )

//keyの存在に関係なく要素同士の加算はarray_merge;

print_r($result['zipcode']);

?>

<?php
$data = <<< DAA
$a = $b = $c = 10;//全て10

$a1 = 10;
$b2 = $c2 = $a1;//全て10
DAA;
print $data;

?>

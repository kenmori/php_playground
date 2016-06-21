<?php

//HereDoc
$job = 'フロントエンドエンジニア';

//<<<EODからEOD;までを文字列リテラルとして扱う
$data = <<< EOD
私の職業は{$job}です。<br>
"I'm a ${job}"<br>
EOD;
print $data;

//phpをそのまま出力したいときに5.3以降のNowDoc
$data2 = <<< 'EOD2'
私の職業は{$job}です。<br>
"I'm a ${job}"
EOD2;
print $data2;

//文字列の結合
$data . $data;
$msg = '私の職業は';
$msg .= 'fafa';


?>



<?php
//array

$array = array(
  "a",
  "b",
  "c",
  6 => "d",
  "e",
);
//順番に追加されていく
$array2[] = '佐藤';
$array2[] = 'モリタ';

print '<pre>';//ソースコードに記述された空白や改行などをそのまま表示する
print_r($array);
print_r($array2);
print '</pre>';


//インデックスとキーを混在させて書ける
$array3 = array(
  "name" => "morita",
  10 => 10,
);
print '<pre>';
print_r($array3);
print '</pre>';


?>

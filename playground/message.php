<?php
 print $_POST['name'];
 print 'さんこんにちは';

 $yourname = $_POST['name'];
 const SAMA = '様';

 print SAMA;
?>



<?php
//可変変数
// 変数の値を変数名として使うことができる
$a = 'hello';//1
$$a = 'world';

//"は変数の中身を出力することができる
print "$a;
print $$a";
?>

<?php

//1で値にした変数の値を変数名にして中身を出力することができる
print "$a;
print $$hello";

?>

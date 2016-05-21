<?php
 print $_POST['name'];
 print 'さんこんにちは';

 $yourname = $_POST['name'];
 const SAMA = '様';
 define(TAX, 1.08);//5.2以前の定数定義

 print SAMA;
?>



<?php
//可変変数
// 変数の値を変数名として使うことができる
$a = 'hello';//1
$$a = 'world';

//"は変数の中身を出力することができる
print "$a $$a";
?>

<?php
//1で値にした変数の値を変数名にして中身を出力することができる
print "$a $hello";
?>

<?php
//定義済み定数
//
print __FILE__;
print __DIR__;
\n;
print __LINE__;
\n;
print __DIRECTORY_SEPARATOR__;\n;
print __PATH_SEPARATOR__;\n;
print __PHP_VERSION__;\n;
print __PHP_OS__;\n;



//8進数 数字0-7までのプレフィックス0
//16進数 0-9a-fのプレフィックス0xを付ける
//
//
//""中身を展開したい場合,文字列としての''
//LF(line-feed)

?>

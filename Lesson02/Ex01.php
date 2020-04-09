<?php
// Khái niệm biến 
/*
	Biến cục bộ
	Biến toàn cục
	Biễn tĩnh (static)
*/
// 1. Biến cục bộ
function bienCucBo(){
	$x = 100;
	$y = 200;
	echo $x . ";" . $y;
}
bienCucBo();
// echo $x ."<br>"; => Error
// 2. Biến toàn cục
$a = 150;
$Name = "Chung Trinhj";
echo $Name ."<br>";
function bienToanCuc(){
	global $a;
	echo $a ."<br>";

	$b=123;
	echo $b ."<br>";
}
bienToanCuc();
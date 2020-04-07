<?php
$a = "Hello";
echo $a . "<br/>";

$b = "$a world"; //tương đương 	$b="Hello world"
echo $b . "<br/>";

$c = '$a world'; //$c='$a world' (không thay đổi)
echo $c . "<br/>";

echo "<hr/>";

$a = 'Hello';
echo $a . "<br/>";

$b = "$a world";
echo $b . "<br/>";

$c = '$a world';
echo $c . "<br/>";

echo "<hr/>";
$a = "He";

$b = "{$a}llo";

$c = $a . "llo";

//Truy xuất một kí tự trọng chuỗi

$dev = "Devmaster Academy";
echo $dev . "<br/>";
echo $dev[0] . "<br/>";
echo $dev[1] . "<br/>";
echo $dev[10] . "<br/>";

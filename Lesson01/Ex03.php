<!-- Khái niệm biến trong PHP -->
<?php
//Khai báo và gán giá trị cho biến
$name = "Chung Trinhj"; //Biến kiểu string
echo $name;
$age = 40; //Biến kiểu number
echo "<br/>";
echo $age;

$gender = true; //Biến kiểu boolean
echo "<br/>";
echo $gender;

// Sử dụng giá trị chuỗi của một là một biến khác
$x = 'y';
$$x = 'z'; // $y='z'

echo "<br/>";
echo $x . "<br/>";
echo $y . "<br/>";


/*
Xác định kiểu của biến:
    gettype($tên_biến);
    Hàm getType() : trả về một trong các 
	Giá trị: "integer", "double", "string", "array", "object", "class", "unknown type" 
*/
echo gettype($x) . "<br/>";
$a = 1012;
$b = 123.45;
echo gettype($a) . "<br/>";
echo gettype($b) . "<br/>";
$c = array();
echo gettype($c) . "<br/>"; //array
//ép kiểu
$e = (int) $b;
echo $b . "-> (int)$b = " . $e . "<br/>"; // 123.45 ->(int)123.45 = 123

echo $a . "+" . $b . "=" . ($a + $b); // 1012 + 123.45 = 1135.45

$a = (string) $a;
echo "<br/>";
echo $a . "+" . $b . "=" . ($a + $b);

?>
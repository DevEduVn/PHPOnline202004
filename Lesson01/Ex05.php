<?php
//Sử dụng một số hàm kiểm tra với biến

//echo "Name:" . $name; //Error
if (isset($name))
	echo $name;
else
	echo "Biến name chưa định nghĩa";
echo "<hr/>";

// hàm empty
if (empty($name))
	echo "empty :";
else
	echo $name;
// is_string
$name = 'Chung Trinhj';
echo "<hr/>";
echo $name;
echo "<br/>";
if (is_string($name))
	echo "Là chuỗi";
else
	echo "không là chuỗi";
echo "<hr/>";
$name = 123456;
echo $name;
echo "<br/>";
if (is_string($name))
	echo "Là chuỗi";
else
	echo "không là chuỗi";

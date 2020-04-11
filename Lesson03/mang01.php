<?php
	//Mảng 1 chiều
	// Khai báo, sử dụng array()
	$mang1 = array(); // Khai báo mảng rỗng
	// Truy xuất:
	$mang1[0] = 100;
	$mang1[1] = 150;

	// In
	print_r($mang1);

	$mang2 = array(123,234,345,456,567,678);
	echo "<hr/>";
	print_r($mang2);
	echo "<br/>" . $mang2[3];

	// Khai báo mảng với chỉ số khác 0
	echo "<hr/>";
	$mang3 = array(2=>100, 3=>200, 4=>300);
	print_r($mang3);
	echo "<br/>" . $mang3[3];

	// Chỉ số của mảng có thể là chuỗi ký tự
	$mang4 = array(		"vi" =>"Việt nam",
						"us" =>" Anh",
						"de" =>" Đức");
	echo "<hr/>";
	print_r($mang4);
	echo "<br/>" . $mang4["us"];
	//echo "<br/>" . $mang4[0]; mảng chỉ số là chuỗi, không phải là số
	
	
<?php
// Định nghĩa hàng trong php -> sử dụng hàm define
define("HELLO", " Xin chào Donal Chung Trinhj");
// sử dụng hằng
echo HELLO;

echo DEV;

define("DEV", "Devmaster Academy");
echo "<p>" . DEV;
/*
Một số hằng xây dựng sẵn
	- TRUE có giá trị 1, FALSE có giá trị 0 (hay một chuỗi rỗng)
	- __FILE__ : trả về tên của tập tin hiện đang được đọc bởi 	trình biên dịch
   	- __LINE__ : trả về số dòng hiện hành trong file
	- __FUNCTION__ : trả về tên hàm đã được khai báo
	- __CLASS__ : trả về tên lớp(class) đã được khai báo
	- __METHOD__ : trả về tên phương thức của lớp đã được khai 	báo
*/
echo "<p> TRUE:" . TRUE;
echo "<p> FALSE:" . FALSE;
echo "<p> FILE:" . __FILE__;
echo "<p> FUNCTION:" . __FUNCTION__;
echo "<p> CLASS:" . __CLASS__;
echo "<p> METHOD:" . __METHOD__;

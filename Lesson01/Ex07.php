<?php
//Kiểu dữ liệu trong php
/*
Các kiểu dữ liệu được hỗ trợ trong PHP
	- Kiểu Boolean (có giá trị TRUE hoặc FALSE).
	- Kiểu số (int, float)
	- Kiểu string: Các giá trị được đặt trong nháy đơn hoặc kép
	- Mảng & đối tượng (array, object)
	- Ngoài ra còn có kiểu "NULL", khi không có giá trị gán cho kiểu dữ 	liệu.
Chú ý : PHP không yêu cầu phải khai báo kiểu dữ liệu cho biến trước 	
khi dùng, và chỉ cần hiểu dữ liệu theo bối cảnh mà dữ liệu được sử dụng.
Có thể dùng 
hàm gettype() để biết kiểu dữ liệu của biến, 
và hàm settype() để thay đổi kiểu của biến
*/
// Kiểu integer
$a = 16;
echo $a . "<br/>";
$a = 0x10;
echo $a . "<br/>";
$a = 020;
echo $a . "<br/>";

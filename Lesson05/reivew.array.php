<?php
	// Khai báo và khởi tạo mảng
	// Duyệt và in ra danh sách
	$arr = [
		[10,20,40],
		[15,25,35],
		[20,25,30]
	]; // Mảng 2 chiều
	echo "<pre>";
	print_r($arr);
	
	echo "</pre>";
	for($d =0; $d <sizeof($arr); $d++){
		for($c=0; $c<sizeof($arr[$d]); $c++){
			echo $arr[$d][$c]. " | ";
		}
		echo "<p>";
	}
	?>
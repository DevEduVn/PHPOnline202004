<?php 
	$link = mysqli_connect("localhost", "root", "dev@123", "phponilnetest");

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	mysqli_set_charset($link, "utf8");
	//echo "running...";
?>

<!-- 1. Tạo kết nối : mysqli_connect
2. Chọn cơ sở dữ liệu: 
3. Thực thi câu lệnh truy vấn: mysqli_query
4. Thao tác với dữ liệu trên tập kết quả
	- Select: 
		mysqli_fetch_array => đọc từng dòng trong tập kết quả -->
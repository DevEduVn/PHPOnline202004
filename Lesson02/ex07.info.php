<?php
	//Lấy dữ liệu khi người dùng submit form 
	// từ Form login
	if(isset($_POST["btLogin"])){ //Khi người dùng click vào nút btLogin
		// Lấy dữ liệu trên form
		$tk = $_POST["tenDangNhap"];
		$mk = $_POST["matKhau"];
		echo "<h1> Welcome to, $tk</h1>";
		echo "<h3> Mật khẩu của bạn là: $mk</h3>";
	}
?>
<a href="ex07.bt.php">Trở lại</a>
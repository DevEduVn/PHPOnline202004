<?php
/*
	Thiết kế form đăng nhập
	- Tên đăng nhập
	- Mật khẩu
	=> Khi người dùng nhấn submit thì
	=> Chuyển sang trang info.php
		=> Hiển thị các thông tin bạn vừa nhập
	=> 15'
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/ex07.css">
</head>
<body>
	<form action="ex07.info.php" id="frmLogin" name="frmLogin" method="post">
		<div class="img-logo">
			<img src="https://devmaster.edu.vn/images/logo.png" 
				alt="Devmaster Academy">
		</div>
		<div class="form-group">
			<label for="tenDangNhap">Tên đăng nhập</label>
			<input type="text" name="tenDangNhap" id="tenDangNhap"
				class="form-control" placeholder="Nhập tên đăng nhập...">
		</div>
		<div class="form-group">
			<label for="matKhau">Mật khẩu</label>
			<input type="password" name="matKhau" id="matKhau"
				class="form-control" placeholder="Nhập tên đăng nhập...">
		</div>
		<div class="">
			<label for=""></label>
			<input type="submit" name="btLogin" value ="Đăng nhập" class="green">
			<input type="reset" name="btReset" value ="Làm lại" class="red">
		</div>
	</form>
</body>
</html>
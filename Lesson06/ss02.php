<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy giá trị từ session </title>
</head>
<body>
	<h1>Lấy giá trị từ biến session </h1>
	<?php 
		echo "<h2> Welcome to, " . $_SESSION['username'];
		echo '<h3> Mật khẩu của bạn là:'.$_SESSION['password'];
	?>
</body>
</html>
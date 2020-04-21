<?php 
	session_start();

	// Gián giá trị cho biến session
	$_SESSION['username'] = "ChungTrinhj";
	$_SESSION['password'] = "Admin";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Lấy sessionid của người dùng</h1>
	<?php 
		echo "Giá trị:" . session_id()  ;
	?>

	<a href="ss02.php"> Lấy giá trị từ Session </a>
</body>
</html>
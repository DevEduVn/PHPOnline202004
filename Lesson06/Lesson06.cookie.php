<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lấy giá trị từ cookie </title>
</head>
<body>
	<h1>Lấy giá trị từ đối tượng cookie đã lưu (với tên: Lesson06)</h1>
	<?php 
		// Đọc giá trị từ cookie / kiểm tra xem có tồn tại cookie đó không
		if(isset($_COOKIE["Lesson06"])){
			// Có tồn tại
			$lss = $_COOKIE["Lesson06"];
			echo "<h2> Xin chào " . $lss . "</h2>";
		}else{ // Không tồn tại
			echo '<h2> Không tồn tại cookie </h2>';
		}
	?>

	<a href="xoacookie.php">Xóa cookie</a>
</body>
</html>
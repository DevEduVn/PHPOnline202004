<?php
	// Giải phương trình bậc nhất (ax + b =0)
	// 
	if(isset($_POST["btXuLy"])){
		// Lấy dữ liệu trên form
		$a = $_POST["heSoA"];
		$b = $_POST["heSoB"];
		// Giải phương trình
		if($a == 0){
			if($b==0){
				echo "<p> Phương trình {$a}x + $b = 0 => có vô số nghiệm</p>";
			}else{
				echo "<p> Phương trình {$a}x + $b = 0 => có vô nghiệm</p>";
			}
		}else{
			$x = $b/$a;
			echo "<p> Phương trình {$a}x + $b = 0 => Có nghiệm x = $x </p>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giải phương trình bậc nhất (if)</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form action="" method="post">
		<h2>Giải phương trình bậc 2</h2>
		<div class="form-group">
			<label for="heSoA">Nhập hệ số a</label>
			<input type="number" name="heSoA" id="heSoA" class="form-control">
		</div>
		<div class="form-group">
			<label for="heSoB">Nhập hệ số a</label>
			<input type="number" name="heSoB" id="heSoB" class="form-control">
		</div>
		<div class="form-group">
			<label for=""></label>
			<input type="submit" name="btXuLy" id="btXuLy" value="Xử lý">
			<input type="reset" name="btReset" id="btReset" value="Làm lại">
		</div>
	</form>
</body>

</html>
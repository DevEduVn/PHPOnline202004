<?php
	// Tính số ngày trong tháng / năm 
	// 04 / 2020 => số ngày 30
	if(isset($_POST["btXuLy"])){
		// Lấy dữ liệu trên form
		$thang = $_POST["thang"];
		$nam = $_POST["nam"];
		$soNgay=0;
		// tính 
		switch($thang){
			case 1:
			case 3:
			case 5:
			case 7:
			case 8:
			case 10:
			case 12:
				$soNgay = 31;
				break;
			case 4:
			case 6:
			case 9:
			case 11:
				$soNgay=30;
				break;
			case 2:
				if($nam % 4 ==0 && $nam % 100 !=0){
					$soNgay=29;
				}else{
					$soNgay=28;
				}
				break;
			default:
				echo "<h2> Bạn nhập sai!</h2>";
		}
		if($soNgay>0){
			echo "<h2> Tháng $thang , năm $nam có $soNgay ngày</h2>";
		}
	
	}

	echo uniqid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Số ngày trong tháng năm</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form action="" method="post">
		<h2>Tính số ngày trong tháng năm</h2>
		<div class="form-group">
			<label for="thang">Nhập tháng</label>
			<input type="number" name="thang" id="thang" class="form-control"
				value="<?php echo isset($thang)?$thang:''; ?>">
		</div>
		<div class="form-group">
			<label for="nam">Nhập năm</label>
			<input type="number" name="nam" id="nam" class="form-control" value="<?php echo isset($nam)?$nam:''; ?>">
		</div>
		<div class=" form-group">
			<label for=""></label>
			<input type="submit" name="btXuLy" id="btXuLy" value="Xử lý">
			<input type="reset" name="btReset" id="btReset" value="Làm lại">
		</div>
	</form>
</body>

</html>
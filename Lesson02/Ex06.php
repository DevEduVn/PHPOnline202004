<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form</title>
	</head>
	<body>
		<?php
			//Kiểm tra khi người dụng submit
			if(isset($_REQUEST["btnSubmit"])){
				$t = $_REQUEST["ten"]; //Lấy dữ liệu trên form
				echo "Welcome to, $t"; // Hiển thị dữ liệ
				//die();
			}
		?>
		<form id="frm" name="frm" action="" method="get">
			<div>
				<label for="ten">Nhập tên</label>
				<input type="text" name="ten" id="ten" 
					value="<?php echo isset($_REQUEST['ten'])?$_REQUEST['ten']:''; ?>"
					placeholder="Mời bạn nhập tên...">
			</div>
			<div>
				<input type="submit" name="btnSubmit" value="Gửi">
			</div>
		</form>
	</body>
</html>
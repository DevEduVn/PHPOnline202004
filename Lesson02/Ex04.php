<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Form</title>
	</head>
	<body>
		<?php
		if(isset($_GET["ten"])){
			$t = $_GET["ten"];
			echo "Welcome to, $t";
			die();
		}
			
		?>
		<form id="frm" name="frm" action="" method="GET">
			<div>
				<label for="ten">Nhập tên</label>
				<input type="text" name="ten" id="ten" value=""
					placeholder="Mời bạn nhập tên...">
			</div>
			<div>
				<input type="submit" name="btnSubmit" value="Gửi">
			</div>
		</form>
	</body>
</html>
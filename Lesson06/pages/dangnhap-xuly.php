<?php 
	// Kiểm tra đăng nhập / nếu đúng lưu cookie, lưu session
	
	if(isset($_POST['btnDangNhap'])){
		// Lấy giá trị từ form
		$user = $_REQUEST['email'];
		$pass = $_REQUEST['pass'];

		if($user == "devmaster.edu.vn@gmail.com" && $pass =="Admin"){
			// Lưu session
			$_SESSION['email'] = $user;
			//  nếu checked ghiNho => Lưu cookie
			if(isset($_REQUEST['ghiNho'])){
				setcookie("email",$user,time()+36000);
			}

			echo "<script> location.href='index.php'; </script>";

		}else{
			echo "Bạn đăng nhập sai thông tin.";
			echo "<a href='index.php?go=dangnhap'> Trở lại </a>";
		}

	}

?>
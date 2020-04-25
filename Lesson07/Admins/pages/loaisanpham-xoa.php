<?php 
if(isset($_REQUEST['id'])){
	// Đọc dữ liệu từ db theo id 
	$id = $_REQUEST['id'];
	// tạo truy vấn xóa
	$sql = "DELETE FROM loaisanpham Where id = $id ";
	if(mysqli_query($link, $sql)){
		echo "<script> location.href='index.php?go=loaisanpham'; </script>";
	}else{
		echo "<script> location.href='index.php?go=loaisanpham&err=loixoa'; </script>";
	}
}

?>
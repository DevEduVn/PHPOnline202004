<?php 
	// Thực hiện thêm mới khi người dùng submit
	if(isset($_REQUEST["btnSave"])){
		// Lấy dữ liệu trên form
		$ten = $_POST["Ten"];
		$mota = $_POST["Mota"];
		$trang_thai = $_POST["Trang_thai"];
		$ngay_tao = date("Y-m-d H:i:s");
		$nguoi_tao = "DEV";

		// Tạo truy vấn thêm
		$sql  = "INSERT INTO loaisanpham(Ten,Mota,Ngay_tao,Nguoi_tao,Trang_thai) ";
		$sql .= " VALUES('$ten','$mota ','$ngay_tao','$nguoi_tao',$trang_thai)";
		// die($sql);
		if(mysqli_query($link, $sql)){
			echo "<script> location.href='index.php?go=loaisanpham'; </script>";
		}
	}
?>
<form id="frmLoaiSanPhamThem" method="POST" action="" class="ml-3 mr-3 mt-1 w-50">
	<h1>Thêm mới loại sản phẩm</h1>
	<div class="form-group">
		<label for="Ten">Tên loại</label>
		<input type="text" class="form-control" id="Ten" name="Ten" 
			placeholder="Nhập tên loại...." required="">
	</div>
	<div class="form-group">
		<label for="Mota">Mô tả</label>
		<textarea class="form-control" id="Mota" name="Mota"></textarea>
	</div>
	<div class="form-group">
	<label for="Trang_thai">Trạng thái</label>
	<select class="form-control" id="Trang_thai" name="Trang_thai">
	  <option value="1">Hiển thị</option>
	  <option value="0">Ẩn</option>
	</select>
	</div>
 	<button type="submit" class="btn btn-primary" name="btnSave">
 			Ghi lại</button>
 	<a href="index.php?go=loaisanpham" class="btn btn-secondary">Quay lại</a>
</form>
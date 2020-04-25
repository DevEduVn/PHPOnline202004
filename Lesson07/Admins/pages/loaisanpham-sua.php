<?php 
	// Thực hiện thêm mới khi người dùng submit
	if(isset($_REQUEST["btnSave"])){
		// Lấy dữ liệu trên form
		$id = $_POST["ID"];
		$ten = $_POST["Ten"];
		$mota = $_POST["Mota"];
		$trang_thai = $_POST["Trang_thai"];
		$ngay_sua = date("Y-m-d H:i:s");
		$nguoi_sua = "DEV-SUA";

		// Tạo truy vấn thêm
		
		$sql  = "UPDATE loaisanpham SET Ten='$ten', Mota='$mota', Trang_thai=$trang_thai, ngay_sua='$ngay_sua', Nguoi_sua='$nguoi_sua' ";
		$sql .= " WHERE id = $id";
		// die($sql);
		if(mysqli_query($link, $sql)){
			echo "<script> location.href='index.php?go=loaisanpham'; </script>";
		}
	}

	// Đọc dữ liệu sửa
	if(isset($_REQUEST['id'])){
		// Đọc dữ liệu từ db theo id 
		$id = $_REQUEST['id'];
		// Tạo truy vấn
		$sql ="Select * from loaisanpham where id = $id ";
		// die($sql);
		$result = mysqli_query($link,$sql); // 1 dòng dữ liệu
		$row = mysqli_fetch_array($result);
	}
?>
<form id="frmLoaiSanPhamThem" method="POST" action="" class="ml-3 mr-3 mt-1 w-50">
	<h1>Thêm mới loại sản phẩm</h1>
	<div class="form-group">
		<label for="ID">Mã</label>
		<input type="text" class="form-control" id="ID" name="ID" 
			readonly="" value="<?php echo $row['ID']; ?>">
	</div>
	<div class="form-group">
		<label for="Ten">Tên loại</label>
		<input type="text" class="form-control" id="Ten" name="Ten" 
			placeholder="Nhập tên loại...." required="" value="<?php echo $row['Ten']; ?>">
	</div>
	<div class="form-group">
		<label for="Mota">Mô tả</label>
		<textarea class="form-control" id="Mota" name="Mota"><?php echo $row['Mota']; ?></textarea>
	</div>
	<div class="form-group">
	<label for="Trang_thai">Trạng thái</label>
	<select class="form-control" id="Trang_thai" name="Trang_thai">
	  <option value="1" <?php echo $row['Trang_thai']==1?'selected':''; ?>>Hiển thị</option>
	  <option value="0" <?php echo $row['Trang_thai']==0?'selected':''; ?>>Ẩn</option>
	</select>
	</div>
 	<button type="submit" class="btn btn-primary" name="btnSave">
 			Ghi lại</button>
 	<a href="index.php?go=loaisanpham" class="btn btn-secondary">Quay lại</a>
</form>
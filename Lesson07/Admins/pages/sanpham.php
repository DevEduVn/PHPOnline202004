<?php 
	//1. Kết nối=> Sử dụng từ file ketnoi.php trong index.php  => $link
	//2. tạo truy vấn đọc dữ liệu
	$query = "Select * from sanpham";
	//3. Thực thi câu lệnh truy vấn
	$result = mysqli_query($link, $query);

	//4. Thao tác trên tập kết quả
	
?>
<nav class="navbar navbar-light bg-light ">
	<div class="row d-flex" >
		<?php 
			$sqlLoai = "Select * from loaisanpham ";
			$resLoai = mysqli_query($link,$sqlLoai);

		?>
		<select class="form-control" id="loaisanpham" name="loaisanpham">
			<?php 
				while ($rLoai = mysqli_fetch_array($resLoai)):
			?>
			  <option value="<?php echo $rLoai['ID']; ?>">
			  		<?php echo $rLoai['Ten']; ?></option>
			<?php endwhile; ?>
		</select>
	 
	</div>
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Ngày sửa</th>
      <th scope="col">Người tạo</th>
      <th scope="col">Người sửa</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Chức năng</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  		// Nếu có dữ liệu
  		if(mysqli_num_rows($result)>0){
  	?>
  	<?php 
  		$stt=0;
  		while ($row = mysqli_fetch_array($result)):
  			$stt++;
  	?>
    <tr>
      <th scope="row"><?php echo $stt; ?></th>
      <td><?php echo $row["ID"]; ?></td>
      <td><?php echo $row["Ten"]; ?></td>
      <td><?php echo $row["Mota"]; ?></td>
      <td><?php echo $row["Ngay_tao"]; ?></td>
      <td><?php echo $row["Ngay_sua"]; ?></td>
      <td><?php echo $row["Nguoi_tao"]; ?></td>
      <td><?php echo $row["Nguoi_sua"]; ?></td>
      <td><?php echo $row["Trang_thai"]==1?'Hiển thị':'Đang ẩn'; ?></td>
      <td>
      		<a href="index.php?go=sanpham-sua&id=<?php echo $row["ID"];?>" class="btn btn-primary" title="Sửa loại sản phẩm"> <i class="fas fa-edit"></i>  </a>

      		<a href="index.php?go=sanpham-xoa&id=<?php echo $row["ID"];?>" class="btn btn-danger" title="Xóa loại sản phẩm"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
   	<?php endwhile; ?>
   	<?php 
   		}else{
   	?>
   	<tr>
   		<td colspan="10"><i>Chưa có  sản phẩm nào....</i> </td>
   	</tr>
   	<?php 
   		}
   	?>
  </tbody>
</table>
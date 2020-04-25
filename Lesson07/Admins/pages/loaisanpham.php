<?php 
	//1. Kết nối=> Sử dụng từ file ketnoi.php trong index.php  => $link
	//2. tạo truy vấn đọc dữ liệu
	$query = "Select * from loaisanpham";
	//3. Thực thi câu lệnh truy vấn
	$result = mysqli_query($link, $query);

	//4. Thao tác trên tập kết quả
	
?>
<div class="text-right m-1 d-flex ">
	<?php 
		if(isset($_REQUEST['err'])):
	?>
	<div class="alert alert-warning">
		<?php echo "Lỗi xóa loại sản phẩm"; ?>
	</div>
	<?php 
		endif;
	?>
	<a href="index.php?go=loaisanpham-them" class="btn btn-primary">
		Thêm mới</a>
</div>
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
      		<a href="index.php?go=loaisanpham-sua&id=<?php echo $row["ID"];?>" class="btn btn-primary" title="Sửa loại sản phẩm"> <i class="fas fa-edit"></i>  </a>

      		<a href="index.php?go=loaisanpham-xoa&id=<?php echo $row["ID"];?>" class="btn btn-danger" title="Xóa loại sản phẩm"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
   	<?php endwhile; ?>
   	<?php 
   		}else{
   	?>
   	<tr>
   		<td colspan="10"><i>Chưa có loại sản phẩm nào....</i> </td>
   	</tr>
   	<?php 
   		}
   	?>
  </tbody>
</table>
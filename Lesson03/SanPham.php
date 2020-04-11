<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới sản phẩm</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<form action="sanpham_add.php" method="post" name="frmSanPhamAdd" id="frmSanPhamAdd">
		<h2>THÊM MỚI SẢN PHẨM</h2>
		<div class="form-group">
			<label for="loaiSP"> Chọn loại</label>
			<select name="loaiSP" id="loaiSP" class="form-control">
				<option value="1">Nokia</option>
				<option value="2">Iphone</option>
				<option value="3">Samsung</option>
				<option value="4">GL</option>
			</select>
		</div>
		<div class="form-group">
			<label for="maSP"> Mã sản phẩm</label>
			<input type="text" name="maSP" id="maSP" class="form-control">
			<span id="masp" class="err">(*)</span>
		</div>
		<div class="form-group">
			<label for="tenSanPham"> Tên sản phẩm</label>
			<input type="text" name="tenSanPham" id="tenSanPham" class="form-control">
			<span id="tensp" class="err">(*)</span>
		</div>
		<div class="form-group">
			<label for="moTaNgan"> Mô tả sản phẩm</label>
			<input type="text" name="moTaNgan" id="moTaNgan" class="form-control">
			<span id="mota" class="err">(*)</span>
		</div>
		<div class="form-group">
			<label for="anhSP"> Ảnh </label>
			<input type="file" name="anhSP" id="anhSP" class="form-control">
			<span id="anhsp" class="err">(*)</span>
		</div>
		<div class="form-group">
			<label for="soLuong"> Số lượng</label>
			<input type="number" name="soLuong" id="soLuong" class="form-control">
			<span id="soluong" class="err">(*)</span>
		</div>
		<div class="form-group">
			<label for="donGia"> Đơn giá</label>
			<input type="number" name="donGia" id="donGia" class="form-control">
			<span id="dongia" class="err">(*)</span>
		</div>

		<div class="form-group">
			<label for="thongTinCT"> Thông tin chi tiết</label>
			<textarea name="thongTinCT" id="thongTinCT" cols="30" rows="10"></textarea>
			<span id="thongtinchitiet" class="err"></span>
		</div>

		<div class="form-group">
			<label for=""></label>
			<input type="submit" name="btGhi" id="btGhi" value="Ghi lại">
			<input type="reset" name="btReset" id="btReset" value="Làm lại">
		</div>
	</form>
</body>

</html>
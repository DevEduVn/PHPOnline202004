<?php
	// Kiểm tra khi người dùng submit form
	if(isset($_POST["btGhi"])){
		// lấy giá trị trên form
		$maloai = $_POST["loaiSP"];
		$maSP = $_POST["maSP"];
		$tenSanPham = $_POST["tenSanPham"];
		$anhSP = $_POST["anhSP"];
		$soLuong = $_POST["soLuong"];
		$donGia = $_POST["donGia"];
		$moTaNgan = $_POST["moTaNgan"];
		$thongTinCT = $_POST["thongTinCT"];

		// xử lý
		echo "<p> ". $maloai;
		echo "<p> ". $maSP;
		echo "<p> ". $tenSanPham;
		echo "<p> ". $anhSP;
		echo "<p> ". $soLuong;
		echo "<p> ". $donGia;
		echo "<p> ". $moTaNgan;
		echo "<p> ". $thongTinCT;
		
	}
	?>
<a href="sanpham.php">Trở lại</a>
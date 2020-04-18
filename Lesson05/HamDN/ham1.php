<?php
	// Hàm đơn giản
	// Định nghĩa hàm
	function  hien_Thi(){
		echo '<h1> Xin chào mình là thi</h1>';
	}

	// Gọi hàm
	hien_Thi();

	// Hàm có giá trị trả về
	function tinhToan($n){
		$tong =0;
		for($i=1; $i<=$n; $i++) {
			$tong +=$i;
		}
		return $tong;
	}

	$t=tinhToan(10);
	echo '<p>'.$t;
	echo "<hr/>";

	// hàm có nhiều đối số, có tham số tùy chọn
	function showInfo($name, $age=40){
		echo "<h2> $name $age";
	}

	// Gọi hàm
	showInfo("Chung Trịnh");
	showInfo("Donal Trump",70);
	
?>
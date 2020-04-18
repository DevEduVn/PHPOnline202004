<?php
	// Hàm hệ thống
	$tg = getdate();
	//echo $tg;
	print_r($tg);

	$thang = $tg["mon"];
	$nam = $tg["year"];
	$ngay = $tg["mday"];
	echo "<h1>Hôm nay, ngày $ngay tháng $thang năm $nam </h1>";
?>
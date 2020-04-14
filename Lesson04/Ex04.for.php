<?php
	//Cấu trúc lặp for
	// In các số nguyên từ 1-> 10; tính tổng
	//Dạng 1: for đầy đủ
	$x=1;
	$tong=0;
	echo "<h2> (for đầy đủ) Tính:";
	for($x=1; $x<=10; $x++){
		if($x==10){
			echo $x ."=";
		}else{
			echo $x ."+";
		}
		$tong +=$x;
	}
	echo $tong;
	echo "<hr/>";
	echo "<h2> (for khuyết) Tính:";
	$x=1;
	$tong=0;
	for(; $x<=10; $x++){
		if($x==10){
			echo $x ."=";
		}else{
			echo $x ."+";
		}
		$tong +=$x;
	}
	echo $tong;
	echo "<hr/>";
	echo "<h2> (for khuyết 3) Tính:";
	$x=1;
	$tong=0;
	for(; $x<=10; ){
		if($x==10){
			echo $x ."=";
		}else{
			echo $x ."+";
		}
		$tong +=$x;
		$x++;
	}
	echo $tong;
	echo "<hr/>";
	echo "<h2> (for khuyết 2) Tính:";
	$tong=0;
	for($x=1; ; $x++){
		if($x>10) break;
		if($x==10){
			echo $x ."=";
		}else{
			echo $x ."+";
		}
		$tong +=$x;
	}
	echo $tong;
	echo "<hr/>";
	echo "<h2> (for khuyết toàn bộ) Tính:";
	$x=1;
	$tong=0;
	for(; ; ){
		if($x>10) break;
		if($x==10){
			echo $x ."=";
		}else{
			echo $x ."+";
		}
		$tong +=$x;
		$x++;
	}
	echo $tong;
	echo "<hr/>";
	echo "<h2> (for không thân) Tính:";
	$x=1;
	$tong=0;
	for($x=1,$tong=0 ; $x<=10 ; $tong +=$x, $x++);
	echo $tong;
	echo "<hr/>";
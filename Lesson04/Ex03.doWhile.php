<?php 
	// do... while
	// In ra và tính tổng các số nguyên
	// <=10
	$x=1;
	$tong=0;
	echo '<h1> Tính ';
	do{
		if($x<10)
			echo $x ."+";
		else
			echo $x ."=";
		$tong +=$x;
		$x++;
	}while($x<=10);

	echo $tong;
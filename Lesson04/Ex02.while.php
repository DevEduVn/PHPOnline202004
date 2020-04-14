<?php 
	// Ví dụ về while
	// In ra các số nguyên trong khoảng 1-> 10
	$x=1;
	echo "<h1> Dãy số nguyên <= 10</h1>";
	while($x<=10){
		echo $x . "; ";
		$x++;
	}
	echo "<p><hr/></p>";
	// Tính tổng các số nguyên <=10;
	$x=1;
	$tong=0;
	while($x<=10){
		$tong +=$x;
		$x++;
	}
	echo "<h3> Tổng = $tong </h3>";
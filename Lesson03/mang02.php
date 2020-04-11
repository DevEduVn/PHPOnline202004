<?php
	// Mảng nhiều chiều
	$arr = array(
		array(1,3,5),
		array(100,3,200),
		array(123,12,31),
		array("a","b","c")
	);
	//in -> Matrix
	for($r = 0; $r < 4; $r++){
		for($c=0; $c<3; $c++){
			echo "  ". $arr[$r][$c];
		}
		echo "<p>";
	}
	
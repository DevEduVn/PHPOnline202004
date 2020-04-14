<?php
// In ra tam giác hình *
// ví dụ $n=5
/*
	*
	* *
	* * *
	* * * *
	* * * * *
*/
$n=5;
for($x=0; $x<$n; $x++){
	for($y=0;$y<=$x;$y++){
		echo "* &nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<br/><br/>";
}
echo "<hr/>";
/*

 * * * * *
 * * * *
 * * * 
 * *
 * 

*/
for($x=0; $x<$n; $x++){
	for($y=0;$y<$n-$x;$y++){
		echo "* &nbsp;&nbsp;&nbsp;&nbsp;";
	}
	echo "<br/><br/>";
}
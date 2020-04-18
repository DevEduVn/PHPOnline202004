<?php 
	// hàm đệ quy, => hàm gọi lại chính nó
	function giaiThua($n){
		if($n<=1)
			return 1;
		else 
			return $n * giaiThua($n -1 );
	}
	// n! = n*(n-1)*(n-2)* ....*2*1;
	// 0! =1;
	// 1!=1;
	// 2! = 2*1 =2
	// 3!= 3*2*1 = 6
	
	$result = giaiThua(5);
	echo "<h1> " . $result;
?>
<?php
//3.2. Các toán tử 
/*
	- Toán tử số học: +; -; *; /; %
	- Các phép toán quan hệ (phép toán so sánh)
		==; >; >=; <; <=; !=
	- Các phép toán logic : &&; || ; !
	- Bit: &; |; ^
	- Tăng, giảm: ++; --
*/
// Các phép toán số học
$x = 150;
$y = 250;
// + 
$z = $x + $y;
echo "$x + $y = $z <br/>";
$z = $x - $y;
echo "$x - $y = $z <br/>";
$z = $x * $y;
echo "$x * $y = $z <br/>";
$z = $x / $y;
echo "$x / $y = $z <br/>";
$z = $x % $y;
echo "$x % $y = $z <br/>";
echo "<hr/>";

// So sánh
$z = $x == $y;
$z = empty($z)? 0:$z;
echo "$x == $y => $z <br/>";

$z = $x < $y;
$z = empty($z)? 0:$z;
echo "$x < $y => $z <br/>";

$z = $x > $y;
$z = empty($z)? 0:$z;
echo "$x > $y => $z <br/>";

$x=10;  // số nguyên
$y=10.0; // số thực

$z= ($x===$y);
echo "$x === $y => $z <br/>";

$z= ($x==$y);
echo "$x == $y => $z <br/>";

//---
// Gán
$x=10;  // số nguyên
$y=20;
$y +=$x; // $y = $y + $x; 20 +10
$x +=100;

// tăng giảm
$x=10;
echo "x=$x <br/>";
$z = $x++; //  $z = 10;
echo "z=$z ; x=$x <br/>";
echo "x= $x <br/>";
$z = ++$x;
echo "z=$z ; x=$x <br/>"; // z=12; x=12

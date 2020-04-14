<?php
// Xử lý với mảng một chiều
// Khai báo => truy xuất => tìm kiếm, tính toán
$arrNum = array(10,30,20,40,50);
$names = array("Hung","Dung","Sang","Trong");
echo  $arrNum[0]."<br/>";
echo  $names[0]."<br/>";
echo  $names[10]."<br/>";
//Gán giá trị cho vị trí trong mảng
$names[4]="Donal Trump";
echo  $names[4]."<br/>";
$names[6] = "Donal ChungTrinhj";
echo  $names[6]."<br/>";
echo  $names[5]."<br/>";

$names["vi"]="Việt name";
echo  $names["vi"]."<br/>";
// duyệt mảng
echo "<h2> Danh sách:</h2>";
for($i=0; $i<sizeof($names); $i++){
	echo $names[$i] . "<br/>";
}
//Sử dung foreach để duyệt mảng
echo "<h2> Danh sách:</h2>";
foreach($names as $index=>$value){
	echo $index ." => " . $value ."<br/>";
}
echo "<h2> Danh sách:</h2>";
foreach($names as $value){
	echo   $value ."<br/>";
}
echo "<h2> sử dụng each</h2>";
while($arr = each($names)){
	echo $arr['value'] . "<br/>";
	//var_dump($arr);
}
reset($names);
// list, each cùng với while
echo "<h2>list, each cùng với while</h2>";
while(list($key,$value) = each($names)){
	echo $key ."=>". $value . "<br/>";
}
// https://www.php.net/manual/en/function.each.php

//Sắp xếp
sort($names);
echo "<h2>Sắp xếp:</h2>";
while($arr = each($names)){
	echo $arr['value'] . "<br/>";
	//var_dump($arr);
}
rsort($names);
echo "<h2>Sắp xếp giảm:</h2>";
while($arr = each($names)){
	echo $arr['value'] . "<br/>";
	//var_dump($arr);
}
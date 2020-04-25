<?php 
	if(isset($_REQUEST['go'])){
		$page = $_REQUEST['go'] .".php";
		include 'pages/'.$page;
	}else{
		include 'pages/main.php';
	}
?>
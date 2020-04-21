<?php 
	if(isset($_REQUEST["go"])){
		$page = $_REQUEST["go"] .".php";
		//die($page);
		include("pages/".$page);
	}else{
		echo "<h1> Welcome to mysite</h1>";
	}

?>
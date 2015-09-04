<?php
	$navigationIsClick = isset($_GET['color']);
	if($navigationIsClick){
		$color = $_GET['color'];
	} else{
		$color = "blue";
	}
	$pageData = new StdClass();

	$pageData->css = "<link rel = 'stylesheet' href = 'css/layout.php?color=$color'/>";
	$page = "
			<!DOCTYPE html>
			<html>
			<head>
				$pageData->css
			</head>
			<body>
				<div id = 'p'>Hello</div>
				<a href = 'index.php?color=red'>Red</a>
				<a href = 'index.php?color=pink'>Pink</a>
			</body>
			</html>
			";
	echo $page;
?>
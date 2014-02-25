<?php 
	//The Pages that I want to display in the top header section
	//Links
	$pages_array = array("index.php","about.php","goals.php","documentary.php","media.php","partners.php", "contact.php");
	//Names
	$names = array("Home","About Us","Goals","Documentary","Media", "Partners","Contact Us");
	//Is there a page set? Default = index
	if(!isset($page) OR !in_array($page, $pages_array)){
		$page = "index.php";
	}
	//HTML Template stuff
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz|Droid+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="inland.css" />
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<!-- Badger Stuff -->
	<script type="text/javascript" src="badger.js"></script>
	<link rel="stylesheet" href="badger.css" type="text/css" />
	<title>Peaceconferencing</title>
	<script>
	// Jquery Start
		$(document).ready(function()
		{
			//look for the "doc" id and badge it with "new"
			$('#doc').badger('new!');
		});
	</script>
	<style type="text/css">

	</style>
</head>

<body>
<div id="wrapper960" class="clearfix">

	<div id="header" class="clearfix shadow">
		<div id="sitetitle" class="clearfix">
			<h1><a href="index.php">Peaceconferencing</a></h1>
		</div>

		<div id="nav" class="clearfix">
			<ul>
				<?php
					//foreach printing each link an <li> tag w/ name and link from above 
					foreach ($pages_array as $key => $value) {
						echo "<li><a ";
						if($page == $value){
							echo " class = \"current\"";
						}
						if($names[$key] == "Documentary"){
							echo " id=\"doc\" style=\"color: blue\"";
						}
						echo " href=\"{$value}\" >{$names[$key]}</a></li>";
					}
					//Below --> Old links just for kicks
				?>
				<!-- <li><a class="current" href="index.html">Home</a></li>
				<li><a  href="about.php">About Us</a></li>
				<li><a href="goals.php">Goals</a></li>
				<li><a href="2-columns-right.html">Media</a></li>
				<li><a  href="index.html">Documentary</a></li>
				<li><a href="3-columns.html">Contact Us</a></li> -->
			</ul>
		</div>
	</div>
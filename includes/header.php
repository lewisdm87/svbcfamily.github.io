<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="style.css">
		<title> HEADER PAGE</title>
	</head>
<body>
	<header>
		<a href="#main-menu" class="menu-toggle">
			<span class="fa fa-list"></span>
		</a>
		<img src="/media/logo_200x200.png" width="50" height="50" alt="svbc logo"/>
	
	<nav id="main-menu" class="main-menu">
    	<a href="#main-menu-toggle" class="menu-close">
		<span class="fa fa-window-close"></span>
    	</a>
		<ul>
		<li><a href="index.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="awana.php">AWANAS</a></li>
		<li><a href="calendar.php">CALENDAR</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="events.php">EVENTS</a></li>
		<li><a href="photos.php">PHOTOS</a></li>
		<li><img src="/media/logo_200x200.png" width="50" height="50" alt="svbc logo"/></li>
    	</ul>
  	</nav>
	</header>

	<div class="special">
		<?php include('includes/special.php'); ?>
	</div>
	
	<div class="blessing">
		<?php include('includes/blessed.php'); ?>
	</div>


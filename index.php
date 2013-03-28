<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1 class="homepage">Indianapolis</h1><h2>a history</h2></header> <!-- HEADER OF PAGE -->

	<div id="home-container">
		<div id="home-dummy"></div>
		<div id="home-element">
			<div id="aboutbox"><img src="_/content/home-square05.png"><img src="_/content/home-square05a.png" class="hover"></div>
			<div id="historybox"><img src="_/content/home-square01.png"><img src="_/content/home-square01a.png" class="hover"></div>
			<div id="memorialbox"><img src="_/content/home-square02.png"><img src="_/content/home-square02a.png" class="hover"></div>
			<div id="artsbox"><img src="_/content/home-square03.png"><img src="_/content/home-square03a.png" class="hover"></div>
			<div id="sitesbox"><img src="_/content/home-square04.png"><img src="_/content/home-square04a.png" class="hover"></div>
		</div>
	</div>

<?php include 'global/foot.php';?>
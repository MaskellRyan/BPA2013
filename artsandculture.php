<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Arts & Culture</h1><h2>Pick a category</h2></header> <!-- HEADER OF PAGE -->

	<div class="box threecol"> <!-- START -->
		<a href="districts.php">
		<figure>
			<h1>Districts</h1>
			<div class="pictures">
				<img src="_/content/img/arts/district_theater.jpg">
			</div>
		</figure>
		</a>
	</div> <!-- END -->

	<div class="box threecol"> <!-- START -->
		<a href="culture.php">
		<figure>
			<h1>Culture</h1>
			<div class="pictures">
				<img src="_/content/img/arts/culture_crosswalk.jpg">
			</div>
		</figure>
		</a>
	</div> <!-- END -->


	<div class="box threecol"> <!-- START -->
		<a href="museums.php">
		<figure>
			<h1>Museums</h1>
			<div class="pictures">
				<img src="_/content/img/arts/museum_lovestatue.jpg">
			</div>
		</figure>
		</a>
	</div> <!-- END -->

<?php include 'global/foot.php';?>
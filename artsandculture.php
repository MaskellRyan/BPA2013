<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Arts & Culture</h1><h2>Pick a category</h2></header> <!-- HEADER OF PAGE -->

	<div class="box threecol"> <!-- START -->
		<figure>
			<h1>Early Years</h1>
			<div class="pictures">
				<img src="_/content/img/history/earlyyears1.jpg">
			</div>
		</figure>
		<article>
		</article>
	</div> <!-- END -->

	<div class="box threecol"> <!-- START -->
		<figure>
			<h1>Industrial Era</h1>
			<div class="pictures">
				<img src="_/content/img/history/indust_train.jpg">
			</div>
		</figure>
		<article>
		</article>
	</div> <!-- END -->

	<div class="box threecol"> <!-- START -->
		<figure>
			<h1>20th Century</h1>
			<div class="pictures">
				<img src="_/content/img/history/20century_downtown.jpg">
			</div>
		</figure>
		<article>
		</article>
	</div> <!-- END -->

<?php include 'global/foot.php';?>
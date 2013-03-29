<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header class="subpage"><h1>We're Awesome</h1><h2>About Us</h2></header> <!-- HEADER OF PAGE -->

		<div class="box"> <!-- START CONTENT DRAWER -->

		<article>
			<section>
				<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
			</section>
			<aside>
				<h3>Favorites</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Running</a></li>
					<li><a href="#">Jumping</a></li>
					<li><a href="#">Climbing Trees</a></li>
					<li><a href="#">Putting on makeup</a></li>
					<li><a href="#">While I'm up there</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/foot.php';?>
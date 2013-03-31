<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header class="subpage"><h1>We're Awesome</h1><h2>About Us</h2></header> <!-- HEADER OF PAGE -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer1"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>About this site</h1>
			<div id="slider1" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/code-mockup.jpg"></div>
			    <div><img src="_/content/img/desktop-mockup.jpg"></div>
			    <div><img src="_/content/img/ipad-mockup.jpg"></div>
			    <div><img src="_/content/img/iphone-mockup.jpg"></div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn" onclick='slider1.prev();'><p>ë</p></div> 
			<div class="slider-btn" onclick='slider1.next();'><p>î</p></div>
		</div>
		<article id="drawer1" class="collapse">
			<section class="fullwidthcontent">
				<div class="span3">
					<img src="_/content/img/about/about_responsiveicon.png">
					<h2>Responsive and Fluid Design</h2>
					<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
				</div>
				<div class="span3">
					<img src="_/content/img/about/about_codelang.png">
					<h2>HTML5 / CSS3 <br> Structure & Styling</h2>
					<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
				</div>
				<div class="span3">
					<img src="_/content/img/about/about_browsercompat.png">
					<h2>Cross Browser Compatibility</h2>
					<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
				</div>
			</section>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<div class="halfcol">
		<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer2"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Who we are</h1>
			<div id="slider2" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/about/about_campus2.jpg"></div>
			  </div>
			</div>
		</figure>
		<article id="drawer2" class="collapse" style="height:auto;">
			<section class="img-left">
				<img src="_/content/img/about/nic.jpg">
				<ul>
					<li><span>Chapter Name:</span> North Idaho College BPA</li>
					<li><span>Theme:</span> History of Indianapolis and its surrounding suburbs.</li>
					<li><span>School:</span> North Idaho College</li>
					<li><span>City:</span> Coeur d'Alene</li>
					<li><span>State:</span> Idaho</li>
					<li><span>Year:</span> 2013</li>
				</li>
			</section>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->
</div>
<div class="halfcol">
	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer3"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Nice logo!</h1>
			<div id="slider3" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/about/about_map2.png"></div>
			  </div>
			</div>
		</figure>
		<article id="drawer3" class="collapse" style="height:auto;">
			<section class="img-left">
				<img src="_/content/img/about/indycitylogo.png">
				<h2>Well, we think its pretty nice.</h2>
				<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
			</section>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->
</div>

<a class="is-hidden backbutton general-btn" href="contact.php">
<div>
		<i>.</i>
		<h2>Get in touch with us</h2>
</div>
</a>

<?php include 'global/foot.php';?>
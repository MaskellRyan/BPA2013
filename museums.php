<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Museums</h1></header> <!-- HEADER OF PAGE -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer1"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Early Years</h1>
			<div id="slider1" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/history/earlyyears1.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears2.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears3.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears2.jpg"></div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider1.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider1.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider1.next();'><p>på</p></div>
		</div>
		<article id="drawer1" class="collapse">
			<section>
				<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
					<li><a href="#">Junk</a></li>
					<li><a href="#">Links</a></li>
					<li><a href="#">This is a really long link title</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer2"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Industrial Era</h1>
			<div id="slider2" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/history/indust_train.jpg"></div>
			    <div><img src="_/content/img/history/indust_workers.jpg"></div>
			    <div><img src="_/content/img/history/indust_car.jpg"></div>
			    <div><img src="_/content/img/history/indust_racecar.jpg"></div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider2.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider2.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider2.next();'><p>på</p></div>
		</div>
		<article id="drawer2" class="collapse">
			<section>
				<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>

				<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<ol>
					<li>thing</li>
					<li>other thing</li>
				</ol>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer3"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>20th Century</h1>
			<div id="slider3" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/history/20century_downtown.jpg"></div>
			    <div><img src="_/content/img/history/20century_houdini.jpg"></div>
			    <div><img src="_/content/img/history/20century_indy500.jpg"></div>
			    <div><img src="_/content/img/history/20century_newsboys.jpg"></div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider3.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider3.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider3.next();'><p>på</p></div>
		</div>
		<article id="drawer3" class="collapse">
			<section>
				<p>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in <a href="#">American crime</a>. Do you believe that shit? It actually says that in the little book that comes with it: the most popular gun in American crime. Like they're actually proud of that shit.</p>

				<h2>And so it comes to this...</h2>

				<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
					<li><a href="#">Junk</a></li>
					<li><a href="#">Links</a></li>
					<li><a href="#">This is a really long link title</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer4"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Present Day</h1>
			<div id="slider4" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/history/presentdayindy1.jpg"></div>
			    <div><img src="_/content/img/history/presentdayindy2.jpg"></div>
			    <div><img src="_/content/img/history/presentdayindy3.jpg"></div>
			    <div><img src="_/content/img/history/presentdayindy4.jpg"></div>
			    <div><img src="_/content/img/history/presentdayindy5.jpg"></div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider4.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider4.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider4.next();'><p>på</p></div>
		</div>
		<article id="drawer4" class="collapse">
			<section>
				<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
					<li><a href="#">Junk</a></li>
					<li><a href="#">Links</a></li>
					<li><a href="#">This is a really long link title</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/backbutton.html';?>

<?php include 'global/foot.php';?>
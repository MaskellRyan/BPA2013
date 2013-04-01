<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header class="subpage"><h1>Check it out</h1><h2>Our Sources</h2></header> <!-- HEADER OF PAGE -->

<div class="box"> <!-- START CONTENT DRAWER -->
		<article>
			<section class="img-right fullwidthcontent">
				<!-- <img class="is-hidden" src="_/content/img/cc-full.png"> -->
				<a target="_blank" href="http://www.creativecommons.org"><img class="is-hidden" src="_/content/img/cc.png"></a>
				<h1>Creative Commons</h1>
				<blockquote>All of the photos on this website are licenced under the creative commons attribution or are directly credited and linked to the original source.</blockquote>
				<p>You can go to their website to view their rules and regulations at <a target="_blank" href="http://www.creativecommons.org">www.CreativeCommons.org</a></p>
			</section>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<header><h2>History of Indy</h2></header>

	<div class="box sources red"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider1" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider1.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider1.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider1.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->

	<header><h2>Monuments & Memorials</h2></header>

	<div class="box sources green"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider2" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider2.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider2.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider2.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->

<header><h2>Districts</h2></header>

	<div class="box sources blue"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider3" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider3.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider3.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider3.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->
<header><h2>Culture</h2></header>
	<div class="box sources blue"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider4" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider4.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider4.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider4.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->
<header><h2>Museums</h2></header>
	<div class="box sources blue"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider5" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider5.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider5.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider5.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->
<header><h2>Historical Sites</h2></header>
	<div class="box sources orange"> <!-- DECLARE COLOR CATEGORY IN CLASS -->
		<figure>
			<?php include 'global/more.html';?>
			<div id="slider6" class='swipe'>
			  <div class='swipe-wrap'>
			    <div>
			    	<h1><a href="#">Source 1</a><span> by <a href="#">Ryan Maskell</a></span></h1>
					<img src="_/content/img/history/indust_train.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">Source Two!</a><span> by <a href="#">Ashley Chaffin</a></span></h1>
					<img src="_/content/img/history/indust_workers.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">The Third Source</a><span> by <a href="#">Awesomesauce</a></span></h1>
					<img src="_/content/img/history/indust_car.jpg">
			    </div>
			    <div>
			    	<h1><a href="#">FOUR: A source</a><span> by <a href="#">Rachael Morgan</a></span></h1>
					<img src="_/content/img/history/indust_racecar.jpg">
			    </div>
			  </div>
			</div>
		</figure>
		<div class="slider-control">
			<div class="slider-btn is-hidden" onclick='slider6.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider6.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider6.next();'><p>på</p></div>
		</div>
	</div> <!-- END SOURCED IMG BOX -->

	<a class="is-hidden backbutton general-btn creativecomm" target="_blank" href="http://www.creativecommons.org">
<div>
		<i>©</i>
		<h2>Creative Commons Licenced</h2>
</div>
</a>

<?php include 'global/foot.php';?>
<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="red-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>History of Indianapolis</h1></header> <!-- HEADER OF PAGE -->

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
				<p>
					It's hard to believe that what was once platted in 1821 to be a the capitol settlement of one square mile would now be recognized as the nation's 13th largest city.
				</p>
				<blockquote>This is a test of a Blockquote it is really long and stuff</blockquote>
				<p>
					Indianapolis, originally named by Jeremiah Sullivan, a judge of the Indian Supreme Court, was once the home of several Native American tribes. Through is was originally agriculturally-centered, the city joined the industrial revolution with access to the National Road in 1830, and was fully embraced by the automotive age by the late 19th century.
				</p>
				<blockquote class="quote-right">This is a test of a Blockquote it is really long and stuff</blockquote>
				<p>
					Indianapolis, originally named by Jeremiah Sullivan, a judge of the Indian Supreme Court, was once the home of several Native American tribes. Through is was originally agriculturally-centered, the city joined the industrial revolution with access to the National Road in 1830, and was fully embraced by the automotive age by the late 19th century.
				</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
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
				<p>
					With the introduction of the first railroad in 1847, the budding city sought to connected their multiple lines by erecting the nation's first union station in 1849. Indianapolis' growing status as the hub of transportation earned its nickname of "the Crossroads of America."
</p><p>
					As the focal point of the transportation industry, Indianapolis garnered economic growth through foundries, machine shops, auto manufacturers, and auto part suppliers. By the early 20th century the once small town was now the intersection of the automotive industry.
				</p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense!</p>
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
				<p>
					A booming industrial economy also brought with it a thriving 20th-century arts scene. Indianapolis was home to artists of all types, such as acclaimed author and poet James Whitcomb, who is best known for "Little Orphan Annie", which would one day become the famous broadway musical "Annie."
					</p><p>
					Indianapolis has always well-represented the arts through it's Symphony Orchestra (named after itself), the Indiana Museum of Art. (one of the nation's oldest and largest art museums), and the International Violin Competition (regarded as one of the most respected musical competitions of the world).
				</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
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
				<p>With its continued association with the arts and sports, Indianapolis remains as vital as ever. Teams like the NFL's Indianapolis Colts, NBA's Indiana Pacers, and the WNBA's Indiana Fever keep this city as the growing metropolis it has always been known for, the "Crossroads of America."</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="#">Things</a></li>
					<li><a href="#">Stuff</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/foot.php';?>
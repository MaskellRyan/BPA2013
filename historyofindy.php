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
			    <div><img src="_/content/img/history/earlyyears_downtown.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears_virginiaave.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears_westmarket.jpg"></div>
			    <div><img src="_/content/img/history/earlyyears_courthouse.jpg"></div>
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
				<blockquote class="quote-right">Recognized as the nation's 13th largest city.</blockquote>
				<p>
					What was once a swampy uninhabited piece of land quickly turned into a settlement for travelers who stated setting up permanent dwellings along the White River. 
				</p>
				<p>
					Indianapolis, originally named by Jeremiah Sullivan, a judge of the Indian Supreme Court, was once the home of several Native American tribes and was originally know as the Fall Creek Settlement by those who colonized the area. Through is was originally agriculturally-centered, the city joined the industrial revolution with access to the National Road in 1830, and was fully embraced by the automotive age by the late 19th century.
				</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a target="_blank" href="http://indianapolis-indiana.funcityfinder.com/2008/09/17/indianapolis-art-museums/">Museums</a></li>
					<li><a target="_blank" href="http://www.indianapolismotorspeedway.com/history/">History of Indy 500</a></li>
					<li><a target="_blank" href="http://inwhiteriver.wrsp.in.gov/">White River State Park</a></li>
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
			    <div><img src="_/content/img/history/indust_car.jpg"></div>
			    <div><img src="_/content/img/history/indust_workers.jpg"></div>
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
					Originally the White River was planned to serve as the major transportation artery. With its sandy soil it was inadequate to meet the demands of transportation. Under the state's Mammoth Improvement of 1835, sites were set on building a more reliable way to promote trade and commerce.
				</p>
				<blockquote class="quote-right">Nicknamed "The Crossroads of America"</blockquote>
				<p>
					With the introduction of the first railroad in 1847, the budding city sought to connected their multiple lines by erecting the nation's first union station in 1849. Indianapolis' growing status as the hub of transportation earned its nickname of "the Crossroads of America."
</p>

			<p>
					As the focal point of the transportation industry, Indianapolis garnered economic growth through foundries, machine shops, auto manufacturers, and auto part suppliers. By the early 20th century the once small town was now the intersection of the automotive industry.
				</p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>Since the first railway became operational in 1947 the population soared from 8,000 in 1850 to more than 169,000 by 1900.</p>
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
			  	<div><img src="_/content/img/history/20century_houdini.jpg"></div>
			    <div><img src="_/content/img/history/20century_downtown.jpg"></div>
			    <div><img src="_/content/img/history/20century_newsboys.jpg"></div>
			    <div><img src="_/content/img/history/20century_indy500.jpg"></div>
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
					<li><a target="_blank" href="http://www.indianapolissymphony.org/">Indianapolis Symphony Orchestra</a></li>
					<li><a target="_blank" href="http://indyjazzfest.net/">Indy Jazz Fest</a></li>
					<li><a target="_blank" href="http://www.indyarts.org/">Art Council of Indy</a></li>
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
			    <div><img src="_/content/img/history/presentday_canal.jpg"></div>
			    <div><img src="_/content/img/history/presentday_flowers.jpg"></div>
			    <div><img src="_/content/img/history/presentday_nightscape.jpg"></div>
			    <div><img src="_/content/img/history/presentday_indy500.jpg"></div>
			    <div><img src="_/content/img/history/presentday_moncircle.jpg"></div>
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
				<blockquote class="quote-right">Indy has a lot to boast about...</blockquote> 
				<p>In Indianapolis there is never a shortage of things to occupy your time. Forbes recognizes this city as one of America's Best Shopping Cities, with a total of nearly 6,000 retail locations. Indy has a lot to boast about like, opening the first union station ins the world in 1853, having the two largest sporting single-day sporting events in the world (the Indianapolis 500 and the Brickyard 400), and being second only to Washington D.C for the number of monuments and memorials.</p>

				<p>With its continued association with the arts and sports, Indianapolis remains as vital as ever. Teams like the NFL's Indianapolis Colts, NBA's Indiana Pacers, and the WNBA's Indiana Fever keep this city as the growing metropolis it has always been known for, the "Crossroads of America."</p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a target="_blank" href="http://www.indianapolismotorspeedway.com/indy500/">Indianapolis 500</a></li>
					<li><a target="_blank" href="http://www.indianapolismotorspeedway.com/brickyard400/">Brickyard 400</a></li>
					<li><a target="_blank" href="http://www.indyzoo.com/SitePages/home.aspx">Indianapolis Zoo</a></li>
					<li><a target="_blank" href="http://www.colts.com/">NFL Colts</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/foot.php';?>
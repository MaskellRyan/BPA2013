<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Culture</h1></header> <!-- HEADER OF PAGE -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer1"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Cultural Trail</h1>
			<div id="slider1" class='swipe'>
			  <div class='swipe-wrap'>
			    <div><img src="_/content/img/arts/culture/trail_family.jpg"></div>
			    <div><img src="_/content/img/arts/culture/trail_sign.jpg"></div>
			    <div><img src="_/content/img/arts/culture/trail_bikers.jpg"></div>
			    <div><img src="_/content/img/arts/culture/trail_intersection.jpg"></div>
			    <div><img src="_/content/img/arts/culture/trail_yield.jpg"></div>
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
				<blockquote class="quote-right">"devoted to building a greener environment"</blockquote>
				<p>Indiana's Cultural Trail is a greenway system was made possible by Central Indiana Community Foundation, the City of Indianapolis, and numerous non-profit organizations devoted to building a greener environment. The remarkable urban bike and pedestrian path connects the downtown area with many neighborhoods, entertainment hot-spots, and cultural districts including, Fountain Square, Indiana Avenue, Mass Ave, The Canal and White River State Park, Broad Ripple Village, and the Wholesale District. </p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a target="_blank" href="http://www.discoverfountainsquare.com/">Fountain Square</a></li>
					<li><a target="_blank" href="http://www.discovermassave.com/">Mass Ave</a></li>
					<li><a target="_blank" href="http://www.discoverbroadripplevillage.com/home.cfm">Broad Ripple Village</a></li>
					<li><a target="_blank" href="http://www.discoverwholesaledistrict.com/home.cfm">Wholesale District</a></li>
					<li><a target="_blank" href="http://www.discovercanal.com/home.cfm">The Canal and White River State Park</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer2"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Monument Circle</h1>
			<div id="slider2" class='swipe'>
			  <div class='swipe-wrap'>
			  	<div><img src="_/content/img/arts/culture/moncircle_basrelief.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_monument.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_christmas.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_ground.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_sculptures.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_marketstreet.jpg"></div>
			    <div><img src="_/content/img/arts/culture/moncircle_christmaslights.jpg"></div>
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
				<p>Fed by two streets, Market and Meridian, sits Monument Circle - the symbol of Indianapolis. At the center is the monument for Indiana Soldiers and Sailors encompassed by shops, the Hilbert Circle Theatre,  the Indianapolis Symphony Orchestra, and the Christ Church Cathedral. </p>

				<p>The iconic monument was completed in 1902 by German architect Bruno Schmitz as a memorial to honor the veterans of the American Revolution, War of 1812, Mexican-American War, the Civil War, and the Spanish American War. At the base of this 284 foot, six inch Neo-Classical structure is the Eli Lilly Civil War Museum, a museum of Indiana history during the American Civil War. A short elevator ride and 30 steps brings you to an observation deck that gives it's viewers a birds-eye view of the circle and it's amenities. 
				 </p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>Standing 284 feet, the Soldiers and Sailors Monument is approximately 21 feet shorter than the Statue of Liberty.</p>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer3"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>War Memorial Plaza</h1>
			<div id="slider3" class='swipe'>
			  <div class='swipe-wrap'>
			  	<div><img src="_/content/img/arts/culture/warplaza_fallensoldiers.jpg"></div>
			    <div><img src="_/content/img/arts/culture/warplaza_veterans.jpg"></div>
			    <div><img src="_/content/img/arts/culture/warplaza_memorial.jpg"></div>
			    <div><img src="_/content/img/arts/culture/warplaza_depew.jpg"></div>
			    <div><img src="_/content/img/arts/culture/warplaza_building.jpg"></div>
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
				<p>War Memorial Plaza is an integral part of the Business and Government Historic District of Indianapolis. This park is located at the intersection of Holiday and East Lexington Streets and contained the original townhouses that accommodated Loyola High School and Loyola College in 1852. </p>

				<p>On the north side of the building has this inscription :
				  </p>
				  <blockquote>"To commemorate the valor and sacrifice of the land, sea and air forces of the United States and all who rendered faithful and loyal service at home and overseas in the World War; to inculcate a true understanding and appreciation of the privileges of American citizenship; to inspire patriotism and respect for the laws to the end that peace may prevail, justice be administered, public order maintained and liberty perpetuated."</blockquote>
			</section>
			<aside>
				<h3>Fun Fact!</h3>
				<p>
				In addition to educational locations, the War Memorial Plaza also hosted the Indianapolis City Hall and the Holiday Street Theatre.
				</p>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer4"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indiana Statehouse</h1>
			<div id="slider4" class='swipe'>
			  <div class='swipe-wrap'>
			  	<div><img src="_/content/img/arts/culture/statehouse_rotunda.jpg"></div>
			    <div><img src="_/content/img/arts/culture/statehouse_front.jpg"></div>
			    <div><img src="_/content/img/arts/culture/statehouse_sculptures.jpg"></div>
			    <div><img src="_/content/img/arts/culture/statehouse_interior.jpg"></div>
			    <div><img src="_/content/img/arts/culture/statehouse_street.jpg"></div>
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
				<blockquote class="quote-right">"The People's House"</blockquote>
				<p>This 19th Century Neo-Classical structure is a leading travel destination for visitors from all around the world and continues to serve three branches of the state government. Tours are offered everyday to see "The People's House" and learn more about the government of Indiana. For over 125 years, the limestone walls, marble columns, and stained glass rotunda domed building has represented one of the nations most impressive government buildings.  </p>
			</section>
			<aside>
				<h3>Fun Fact!</h3>
				<p>
				The Statehouse dome rises to a height of 105 feet up to the inside stained glass dome and another 130 feet to the top of the dome on the outside of the building. 
				</p>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/backbutton.html';?>

<?php include 'global/foot.php';?>
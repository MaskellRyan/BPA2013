<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Districts</h1></header> <!-- HEADER OF PAGE -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer1"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Broad Ripple Village</h1>
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
				<p>Only a few miles from downtown Indianapolis is the art scene of Broad Ripple Village. Complete with live theatre, historic buildings and boutiques, these charming streets are full of the most original music stages and nightlife diversions.<br><br><br><br></p>
			</section>
			<aside>
				<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="http://travela.priceline.com/hotel/POI-Broad_Ripple_Village_Indianapolis_Indiana_United_States-98920506.html">Accommodations</a></li>
					<li><a href="http://www.urbanspoon.com/n/40/3901/Indianapolis/Broad-Ripple-restaurants">Eats and Drinks</a></li>
					<li><a href="http://visitindy.com/indianapolis-broad-ripple-village">Things To Do</a></li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer2"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Massachusetts Avenue</h1>
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
				<p>Known as the arts and theatre district of Indianapolis is the famous Mass Ave, the city's most historic and oppidan communities. It's eclectic, trendy, and the place to be!<br><br><br></p>

			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>Known to the locals as "Mass Ave" the city has established itself as the arts center of Indianapolis and carries the slogan, "45 degrees from ordinary."</p>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer3"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Fountain Square</h1>
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
				<p>This European style village is a one-of-a-kind cultural district, with its quaint town square and central fountain. A blend of funky independence and architecture makes Fountain Square a choice for visitors and natives alike.<br><br><br><br><br></p>
			</section>
			<aside>
				<h3>What To do</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<oll>
					<li>Lunch and Dinner</li>
					<li>Entertainment and Nightlife</li>
					<li>Antiquing</li>
					<li>Art Galleries</li>
					<li>One-of-a-kind Events</li>
					<li>Local Music Scene</li>
				</ol>
				
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer4"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>The Wholesale District</h1>
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
				<p>Featuring the Circle Centre Mall, local boutiques, and luxury hotel accommodations, this district a fashonista's dream come true. The Wholesale Districts reputation for inviting hospitality makes it one of its visitor's admired place to stay awhile. <br><br><br></p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>The Wholesale District has entertainment as front and center. For the biggest names and the brightest attractions Indianapolis has to offer, you will find them in the Wholesale District.</p>			
				</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->
	
	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer5"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indiana Ave</h1>
			<div id="slider5" class='swipe'>
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
			<div class="slider-btn is-hidden" onclick='slider5.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider5.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider5.next();'><p>på</p></div>
		</div>
		<article id="drawer5" class="collapse">
			<section>
				<p>Jazz is the beat that moves this district. Rich in African American culture is the city's most historically rich community. Come for the Jazz, perfectly restored neighborhoods,  unique heritage and the Madame Walker Theatre Center. <br><br><br><br><br></p>
			</section>
			<aside>
				<h3>All That Jazz!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>An incorporation of African American tribal rhythms blended with European began a musical movement known as Jazz. A precise definition of Jazz music is still not unanimously agreed upon but never-the-less it's appeal is universal. </p>			
				</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->
	
	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer6"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Canal and White River State Park</h1>
			<div id="slider6" class='swipe'>
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
			<div class="slider-btn is-hidden" onclick='slider6.prev();'><p>â<span>slide</span></p></div> 
			<div class="slider-btn is-hidden" onclick='slider6.next();'><p><span>slide</span>å</p></div>
			<div class="slider-btn is-shown" onclick='slider6.next();'><p>på</p></div>
		</div>
		<article id="drawer6" class="collapse">
			<section>
				<p>Home of the Indianapolis Zoo, White River Gardens, Indiana State Museum, NCAA Hall of Champions, and Victory Field is the special district of Canal and White River State Park. The numerous attractions make this cultural hubbub a whole family favorite. There is something for everyone at any age.<br><br><br><br><br></p>
			</section>
			<aside>
			<h3>Helpful Links</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li><a href="http://www.indyzoo.com/SitePages/home.aspx">Indianapolis Zoo</a></li>
					<li><a href="http://www.indyzoo.com/SitePages/WhiteRiverGardens/welcomeToTheGardens.aspx">White River Gardens</a></li>
					<li><a href="http://www.indianamuseum.org/visit/exhibit/">Indiana State Museum</a></li>
					<li><a href="http://www.milb.com/content/page.jsp?ymd=20050630&content_id=41163646&sid=t484&vkey=team1">Victory Field</a></li>
					<li><a href="http://www.ncaahallofchampions.org/index.phpe">NCAA Hall of Champions</a></li>
				</ul>
						</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

<?php include 'global/backbutton.html';?>

<?php include 'global/foot.php';?>
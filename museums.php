<?php define("category", basename(dirname(__FILE__))); include 'global/head.html';?>

<body class="blue-theme"> <!-- DECLARE THEME VIA "color"-theme as class. Availible themes are "red", "green", "blue", "orange", & if you leave blank the theme is gray. -->

<?php include 'global/nav.php';?>

	<header><h1>Museums</h1></header> <!-- HEADER OF PAGE -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer1"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indianapolis</h1>
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
				<p>Located in Broad Ripple Village is the Indianapolis Art Center. Founded in 1934 by the Works Project Administration during the Great Depression inspires audiences to engage and be enlightened through exposure to the visual arts and education.</p>
				<p>The Art Center is composed of a 40,000 square-foot facility designed by the renowned architect Michael Graves, 11 state-of-the-art studios, three public galleries, a 224 seat auditorium, art library, and a nine-acre outdoor public art park.</p>	
			</section>
			<aside>
				<h3>Fun Fact</h3>
				<p>
				The center is conveniently connected to the Cultural Trail and welcomes more than a quarter of a million art enthusiasts each year. 
				</p>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer2"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indianapolis Museum of Art</h1>
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
				<p>Incorporated in 1883, the Indianapolis Museum of Art boasts a rich, historical collection of more than 54, 000 works spanning 5,000 years. The Indianapolis Museum of Art has something for everyone, including 152 acres of gardens and an outdoor art and nature park - one of the largest museum contemporary sculpture parks in the world.</p>

				<p>In addition to its immense collection of art, the museum also boasts a reference library of over 100,000 items of information on visual arts, including the auction catalogs and individual artist files. </p>
			</section>
			<aside>
				<h3>Fun Fact!</h3> <!-- YOU MAY ALSO USE A <ul> HERE -->
				<p>
				General admission to the IMA is FREE!
				</p>	
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer3"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indianapolis Artsgarden</h1>
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
				<p>Corporate events, government functions and wedding receptions all utilize this very unique seven-story tall, glass-enclosed facility to create an memorable experience for those who attend. </p>

				<p>Built in 1995, this conveniently located space connects the City Centre Mall to several hotel locations and the Indianapolis Convention Center.</p>
			</section>
			<aside>
				<h3>Fun Fact!</h3>
				<p>
				The Artsgarden is centrally located downtown and offers a free venue for more than 300 live performances annually.
				</p>	
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->

	<div class="box"> <!-- START CONTENT DRAWER -->
		<figure data-toggle="collapse" data-target="#drawer4"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
			<?php include 'global/more.html';?>
			<h1>Indianapolis Museum of Contemporary Art</h1>
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
				<p>See the latest trends and talent doing ambitious, thought provoking, original works of contemporary art at the Indianapolis Museum of Contemporary Art. </p>
				<p>
				Founded in 2001, this museum's success is made possible through partnerships like the Indianapolis Symphony Orchestra. Over the last decade, the iMOCA has featured over 40 exhibitions featuring the work of more that 75 individual  local and international contemporary artists.
				</p>
			</section>
			<aside>
				<h3>The Collection</h3>
				<ul> <!-- YOU MAY ALSO USE A <p> TAG HERE -->
					<li>African Art</li>
					<li>American Painting and Sculpture to 1945</li>
					<li>Ancient Art of the Americas</li>
					<li>Architectural Sites</li>
					<li>Asian Art</li>
					<li>Design Arts</li>
					<li>Native America Art</li>
					<li>Textile and Fashion Arts</li>
					<li>Prints, Drawings, and Photographs</li>
				</ul>
			</aside>
			<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
		</article>
	</div> <!-- END CONTENT DRAWER -->
		<div class="box"> <!-- START CONTENT DRAWER -->
			<figure data-toggle="collapse" data-target="#drawer5"> <!-- EACH DRAWER MUST DATA-TARGET THE INDIVIDUAL ARTICLE ID -->
				<?php include 'global/more.html';?>
				<h1>Herron School of Art</h1>
				<div id="slider5" class='swipe'>
				  <div class='swipe-wrap'>
				    <div><img src="_/content/img/history/20century_downtown.jpg"></div>
				    <div><img src="_/content/img/history/20century_houdini.jpg"></div>
				    <div><img src="_/content/img/history/20century_indy500.jpg"></div>
				    <div><img src="_/content/img/history/20century_newsboys.jpg"></div>
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
					<p>Named after the man who's art collection that would become the central beginnings of the Indianapolis Museum of Art. John Herron's passion for the arts was so monumental that he established the John Herron Art Institute in 1902.  </p>
	
					<p>The work of students, faculty and alumni of the institute has landscaped the city of Indianapolis for over a century, most notably through sculpture on the Soldiers and Sailors Monument in Monument Circle.</p>
				</section>
				<aside>
					<h3>Fun Fact!</h3>
					<p>
					According to Herron School, the Master of Fine Arts program ranks 45th overall and 20th among public universities, according to the 2013 edition of U.S. News and World Report’s Best Graduate Schools released in March.
					</p>	
				</aside>
				<div class="tab"></div> <!-- DON'T REMOVE THIS TAB ELEMENT -->
			</article>
		</div> <!-- END CONTENT DRAWER -->

<?php include 'global/backbutton.html';?>

<?php include 'global/foot.php';?>
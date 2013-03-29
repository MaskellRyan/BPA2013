	<nav>
		<div class="logo"><a href="index.php">
			<img src="_/img/indy-logo-ani.gif">
			<img src="_/img/indy-logo-ani.png">
			<img style="position: relative; opacity: 0; z-index: -20;" src="_/img/indy-logo-ani.png">
		</a></div>
		<ul>
			<li><em>choose a category...</em></li>
			<li><a class="color-red" href="historyofindy.php">History of Indy</a></li>
			<li><a class="color-green" href="memorials.php">Memorials</a></li>
			<li><a class="color-blue" href="artsandculture.php">Arts & Culture</a></li>
			<li><a class="color-orange" href="historicalsites.php">Historical Sites</a></li>
		</ul>
		<?php define("category", basename(dirname(__FILE__))); include 'global/footernav.html';?>
	</nav>
	<div id="container">

</div> <!-- end container -->

<?php define("category", basename(dirname(__FILE__))); include 'global/footernav.html';?>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript">
		if (typeof jQuery == 'undefined') {
	    	document.write(unescape("%3Cscript src='_/js/jquery-1.8.2.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
	</script>
	<script src="_/js/bootstrap.js"></script>
	<script src="_/js/swipe.js"></script>
	<script src="_/js/hashgrid.js"></script>
	<script src="_/js/script.js"></script>
<script>

// pure JS
// var elem = document.getElementById('mySwipe');
// window.mySwipe = Swipe(elem, {
  // startSlide: 4,
  // auto: 3000,
  // continuous: true,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
// });

// with jQuery
window.mySwipe = $('.swipe').Swipe().data('Swipe');
var slider1 = new Swipe(document.getElementById('slider1'), {});
var slider2 = new Swipe(document.getElementById('slider2'), {});
var slider3 = new Swipe(document.getElementById('slider3'), {});
var slider4 = new Swipe(document.getElementById('slider4'), {});
var slider5 = new Swipe(document.getElementById('slider5'), {});
var slider6 = new Swipe(document.getElementById('slider6'), {});
var slider7 = new Swipe(document.getElementById('slider7'), {});
var slider8 = new Swipe(document.getElementById('slider8'), {});
var slider9 = new Swipe(document.getElementById('slider9'), {});
var slider10 = new Swipe(document.getElementById('slider10'), {});
var slider11 = new Swipe(document.getElementById('slider11'), {});
var slider12 = new Swipe(document.getElementById('slider12'), {});
var slider13 = new Swipe(document.getElementById('slider13'), {});
var slider14 = new Swipe(document.getElementById('slider14'), {});
var slider15 = new Swipe(document.getElementById('slider15'), {});
var slider16 = new Swipe(document.getElementById('slider16'), {});
var slider17 = new Swipe(document.getElementById('slider17'), {});
var slider18 = new Swipe(document.getElementById('slider18'), {});
var slider19 = new Swipe(document.getElementById('slider19'), {});
var slider20 = new Swipe(document.getElementById('slider20'), {});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.contact-tooltip').tooltip();
	});
</script>

<!-- <div style='text-align:center;padding-top:20px;'>
  
  <button onclick='THE-ID.prev()'>prev</button> 
  <button onclick='THE-ID.next()'>next</button>

</div> -->

</body>
</html>

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

</script>

<!-- <div style='text-align:center;padding-top:20px;'>
  
  <button onclick='mySwipe.prev()'>prev</button> 
  <button onclick='mySwipe.next()'>next</button>

</div> -->

</body>
</html>
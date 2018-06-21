<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
		$(window).scroll(function() {
			if ($(this).scrollTop() != 0) {
				$('#bttop').fadeIn();
			} else {
				$('#bttop').fadeOut();
			}
			});
		$('#bttop').click(function() {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
		});
	});
</script>
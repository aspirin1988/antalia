<!-- social-block -->
<footer class="social">
	<a href="<?php the_field('inst',6); ?>" class="inst"></a>
	<a href="<?php the_field('vk',6); ?>" class="vk"></a>
	<a href="<?php the_field('fb',6); ?>" class="fb"></a>
	<a href="mailto:<?php the_field('email',6); ?>" class="mail"></a>
</footer>

<div id="iview" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	<div class="modal-dialog modal-lg modal-img">

	</div>
</div>

</div>

<script src="<?php bloginfo('template_directory');?>/public/js/jquery-2.2.2.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/public/js/bootstrap.min.js"></script>
<script>
	function showImage(e) {
		var mo = $('#iview');
		$('#iview .modal-dialog').html($('<img>',{
			src: e.next('img').attr('src')
		})).append($('<div>', {
			class: 'close',
			'data-dismiss':'modal',
			'aria-label':'Close'
		}).append($('<span>',{
			'aria-hidden': true,
			text: '×'
		})));
		mo.modal();

	}
</script>
<?php the_field('google',6)?>
<?php the_field('yandex',6)?>
</body>
</html>
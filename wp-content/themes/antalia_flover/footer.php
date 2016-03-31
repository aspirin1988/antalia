<!---- social-block ---->
<footer class="social">
	<a href="#" class="inst"></a>
	<a href="#" class="vk"></a>
	<a href="#" class="fb"></a>
	<a href="#" class="mail"></a>
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
</body>
</html>
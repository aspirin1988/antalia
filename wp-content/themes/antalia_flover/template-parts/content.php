<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fest
 */

?>
<div class="row">
	<div class="col-md-12">
		<?php $img=''; $img=get_the_post_thumbnail_url( get_the_ID(), 'full'); if ($img) {?>
			<img class="img-thumbnail"  src="<?=$img?>" alt="df">
		<?php }?>

	</div>
	<div class="col-sm-12">
		<p>2016-04-01 05:37:38 </p>
		<p><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<p></p><p><?php the_content(); ?></p>
		<p></p>
	</div>
</div>
</div>


<footer class="entry-footer">
	<?php //fest_entry_footer(); ?>

</footer><!-- .entry-footer -->

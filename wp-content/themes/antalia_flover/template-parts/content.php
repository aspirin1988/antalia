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

		<?php $img=''; $img=get_the_post_thumbnail_url( get_the_ID(), 'full'); if ($img) {?>
			<img class="img-thumbnail" style="float: left"  src="<?=$img?>" alt="df">
		<?php }?>



		<p><?php the_date(); ?> </p>
		<p><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		<p></p><p><?php the_content(); ?></p>

</div>




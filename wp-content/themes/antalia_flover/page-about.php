<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package antalia_flover
 */
$args = array( 'cat'=> 13 ,'numberposts'=>$page );
$lastposts = get_post( $args );
get_header(); ?>

	<!---- promo ---->
	<div class="page-container about">
		<h3><?php the_title()?></h3>
		<div class="row-about">
			<div class="col-md-6">
				<img class="img-responsive flowers" src="<?php echo  get_the_post_thumbnail_url($lastposts->ID) ?>" alt="Цветы">
			</div>
			<div class="col-md-6">
			<?php

			echo $lastposts->post_content;
			?>
			</div>
		</div>
	</div>


<?php
get_footer();

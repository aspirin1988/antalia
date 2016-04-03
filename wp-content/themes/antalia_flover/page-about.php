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
$args = array( 'cat'=> 1 ,'numberposts'=>$page );
get_header(); ?>

	<!---- promo ---->
	<div class="page-container about">
		<h3><?php the_title()?></h3>
		<div class="row-about">
			<div class="col-md-6">
				<img class="img-responsive flowers" src="<?php the_field('from1000') ?>" alt="Цветы">
			</div>
			<div class="col-md-6">
			<?php $lastposts = get_posts( $args );
				setup_postdata($lastposts[0]);
				the_content();
			?>
			</div>
		</div>
	</div>


<?php
get_footer();

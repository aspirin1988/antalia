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
	<section class="page-container feedback">
		<div class="serv-header">
			<div>
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
		<div class="row">
		<?php  $comments=get_category_by_slug('reviews'); $comments = get_posts(array('cat'=>$comments->cat_ID)); ?>
		<?php foreach ($comments as $key => $value){ ?>

			<div class="col-md-3">
				<img  src="<?php echo get_the_post_thumbnail_url( $value->ID, 'medium');?>" alt="">
				<div class="name">
					<figure> </figure>
					<p><?php echo $value->post_title; ?></p>
					<figure> </figure>
				</div>
				<p><?php echo $value->post_content; ?></p>
			</div>

		<?php } ?>
		</div>
		<img src="<?php bloginfo('template_directory'); ?>/public/pic/heart.png" alt="heart">
<!--		<div class="row">-->
<!--			<div class="col-md-3"></div>-->
<!--			<div class="col-md-6 comment">-->
<!--					<!— Вывод формы отправки комментариев —>-->
<!--				--><?php //comment_form(array(
//					'class_form' => '',
//					'class_submit' => 'btn btn-default',
//				)); ?>
<!--			</div>-->
<!--			<div class="col-md-3"></div>-->
<!--		</div>-->
	</section>



<?php
get_footer();

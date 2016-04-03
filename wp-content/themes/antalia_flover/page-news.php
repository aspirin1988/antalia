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
global $url;
$url = '/news/';
$page=6;
global $count_posts;
global $cat_id;
$cat_id=4;
$count_posts = get_category($cat_id)->category_count;
global$page_count;
$page_count= ceil($count_posts / $page);
echo $page_count;
global $offsett_post;
$offsett_post= $wp_query->query_vars['page']*$page;
$args = array( 'cat'=> $cat_id ,'numberposts'=>$page ,'offset'=>$offsett_post );
get_header(); ?>

	<!---- promo ---->
	<div class="page-container news">
		<h3><?php the_title(); ?></h3>
		<?php $lastposts = get_posts( $args );
		foreach ($lastposts as $post)  {setup_postdata($post);

		?>
		<article>
			<div class="row">
				<div class="col-sm-4">
						<img class="img-responsive" src="<?php echo get_the_post_thumbnail_url( $post->id, 'medium');?>" alt="">

				</div>
				<div class="col-sm-8">
					<p><?php echo $post->post_date_gmt; ?> </p>
					<p><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<p><?php the_content();?></p>
				</div>
			</div>
		</article>
			<?php } ?>
		<?php if ($GLOBALS['page_count']>=2){?>
			<ul class="pagination">
				<?php for ($i=1; $i<=$GLOBALS['page_count']; $i++){?>
					<li><a href="<?php echo $GLOBALS['url'].($i-1); ?>"><?=$i?></a></li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>


<?php
get_footer();

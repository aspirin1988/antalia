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

$args = array( 'cat' =>5);
get_header(); ?>

	<!---- promo ---->
	<div class="page-container">
		<div class="serv-header">
			<img src="<?php bloginfo('template_directory') ?>/public/pic/people.png" alt="" class="hidden-xs">
			<div>
				<h3>Услуги</h3>
				<p>Вы заняты работой или скромны и нерешительны, не знаете как признаться в любви - МЫ ПОМОЖЕМ ВАМ! </p>
			</div>
			<img src="<?php bloginfo('template_directory') ?>/public/pic/people-two.png" alt="" class="hidden-xs">
		</div>

		<div class="row">
			<div class="col-sm-3">
				<p>Голландские розы</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/rose-1.png" alt="Голландские розы"></div>
			<div class="col-sm-3">
				<p>Местные розы</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/rose-2.png" alt="Местные розы"></div>
			<div class="col-sm-3">
				<p>Букеты с игрушками</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/rose-3.png" alt="Букеты с игрушками"></div>
			<div class="col-sm-3">
				<p>Гелиевые шары</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/balloons.png" alt="Гелиевые шары"></div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<p>Буеты любой сложности</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/flowers-1.png" alt="Букеты любой сложности"></div>
			<div class="col-sm-3">
				<p>Букеты в коробках</p>
				<img src="<?php bloginfo('template_directory') ?>/public/pic/flowers-in-box.png" alt="Букеты в коробках"></div>
			<div class="col-sm-3 dropdown">
				<div id="dLabel0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<p>Комнатные растения</p>
					<img src="<?php bloginfo('template_directory') ?>/public/pic/flowers-2.png" alt="Комнатные растения"></div>
				<ul class="dropdown-menu" aria-labelledby="dLabel0">
					<?php $lastposts = get_posts( $args );
					//print_r($lastposts);
					setup_postdata($lastposts[0]);?>
						<li><h4><?php echo $lastposts[1]->post_title;   ?></h4></li>
					<?php
						echo $lastposts[1]->post_content;
					?>
				</ul>
			</div>

			<div class="col-sm-3 dropdown">
				<div id="dLabel1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<p>Изготовление...</p>
					<img src="<?php bloginfo('template_directory') ?>/public/pic/ribbon.png" alt="Изготовление...">
				</div>
				<ul class="dropdown-menu" aria-labelledby="dLabel1">
					<li><h4><?php echo $lastposts[0]->post_title;   ?></h4></li>
					<?php
					echo $lastposts[0]->post_content;
					?>
				</ul>
			</div>

		</div>
	</div>


<?php
get_footer();

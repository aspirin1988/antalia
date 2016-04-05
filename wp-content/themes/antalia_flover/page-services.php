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
			<img src="<?php  bloginfo('template_directory') ?>/public/pic/people.png" alt="" class="hidden-xs">
			<div>
				<h3>Услуги</h3>
				<p>Вы заняты работой или скромны и нерешительны, не знаете как признаться в любви - МЫ ПОМОЖЕМ ВАМ! </p>
			</div>
			<img src="<?php bloginfo('template_directory') ?>/public/pic/people-two.png" alt="" class="hidden-xs">
		</div>
		<div class="row">
		<?php $col=0; $menu=wp_get_nav_menu_items('services'); echo print_r($menu,true); foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){
			if($col>=4){
			?>
			</div>
			<div class="row">
			<?php $col=0; } ?>
			<div class="col-sm-3">
				<div id="dLabel0" class="hower" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<p><?php echo $val->post_title; ?></p>
				<img src="<?php echo  get_the_post_thumbnail_url($val->ID); ?>" alt="Голландские розы">
				</div>
				<ul class="dropdown-menu" aria-labelledby="dLabel0">
					<?php foreach($menu as $value1) {
						if ($value1->menu_item_parent == $val->ID) {?>
							<li><h4><?php echo $value1->title; ?></h4></li>
							<?php
						}
					}
					?>
				</ul>

				</div>
		<?php $col++;}}?>
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

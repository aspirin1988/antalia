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

get_header(); ?>

	<!---- promo ---->

	<div class="row main-block-1">
		<div class="col-sm-6 col-sm-push-3">
			<div class="white-glass">
				<?php the_field('selection');?>
			</div>
		</div>
		<div class="col-sm-3 col-sm-pull-6">
			<p>Гибкая система скидок</p>
			<img src="<?php bloginfo('template_directory');?>/public/pic/tag.png" alt="Гибкая система скидок">
		</div>

		<div class="col-sm-3">
			<p>На рынке более пяти лет</p>
			<img src="<?php bloginfo('template_directory');?>/public/pic/market.png" alt="На рынке более пяти лет">
		</div>
	</div>

	<!---- mini-gallery ---->

	<div class="row mini-gallery">
		<div class="col-sm-6">
			<div class="row">
				<div class="col-xs-6">
					<img src="<?php the_field('from1000'); ?>" alt="flowers 1">
					<div class="over">
						<p>Букеты <br> от 1000 тенге<br/> и выше</p>
					</div>
				</div>
				<div class="col-xs-6">
					<img src="<?php the_field('from2000'); ?>" alt="flowers 2">
					<div class="over">
						<p>Букеты <br> от 2000 тенге<br/> и выше</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-xs-6">
					<img src="<?php the_field('from3000'); ?>" alt="flowers 3">
					<div class="over">
						<p>Букеты <br> от 3000 тенге<br/> и выше</p>
					</div>
				</div>
				<div class="col-xs-6">
					<img src="<?php the_field('from4000'); ?>" alt="flowers 4">
					<div class="over">
						<p>Букеты <br> от 4000 тенге<br/> и выше</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!---- bottom-block ---->
	<div class="row main-block-2">
		<div class="description"><h4><?php the_field('description') ?></h4></div>
		<div class="col-sm-6 col-sm-push-3">
			<div class="white-glass">
				<a><?php the_field('address');?></a>
			</div>
		</div>
		<div class="col-sm-3 col-sm-pull-6">
			<img src="<?php bloginfo('template_directory');?>/public/pic/nature.png" alt="Огромный выбор цветов">
			<p>Огромный выбор цветов.<br>
				Цветы в горшках, на подарок<br>
				или для себя любимой</p>

		</div>

		<div class="col-sm-3">
			<img src="<?php bloginfo('template_directory');?>/public/pic/transport.png" alt="Вы выбираете МЫ ДОСТАВЛЯЕМ!">
			<p>Вы выбираете<br/>
				МЫ ДОСТАВЛЯЕМ!</p>

		</div>
	</div>
	<script type="text/javascript" src="http://callback.blink.kz/client/script/GET/"></script>

<?php
get_footer();

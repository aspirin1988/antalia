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
$page=16;
$args = array( 'cat'=> 1 ,'numberposts'=>$page ,'offset'=>$offsett_post );
get_header();
$offsett_post= $wp_query->query_vars['page']*$page;
echo $offsett_post;
$count_page = get_gall_count('gallery');
$count_page=ceil($count_page / $page);;
?>

	<!---- promo ---->
	<div class="page-container contacts">
		<h3>Контакты</h3>
		<div class="row">
			<div class="col-sm-6">
				<p>По всем вопросам обращаться по номерам:</p>
				<div class="contacts-row">
					<div class="hidden-xs">
						<img src="<?php bloginfo('template_directory'); ?>/public/pic/phone-black.png" alt="Телефон иконка">
					</div>
					<p class="smaller-text"><?php the_field('tel1'); ?><br><?php the_field('tel2'); ?></p>
				</div>
				<br>
				<div class="text-center">
					<p>Качество и свежесть цевтов <br>гарантируем!</p>
					<img class="korzina" src="<?php bloginfo('template_directory'); ?>/public/pic/korzina.png" alt="Корзина иконка">
				</div>
			</div>
			<div class="col-sm-6">
				<p>Наши адреса:</p>
				<div class="contacts-row">
					<div class="hidden-xs">
						<img src="<?php bloginfo('template_directory'); ?>/public/pic/nav-icon.png" alt="Навигация иконка">
					</div>
					<p class="smaller-text underscored">
						<u><?php the_field('address1'); ?></u> <br>
						<u><?php the_field('address2'); ?></u> <br>
						<u><?php the_field('address3'); ?></u> <br>
						<u><?php the_field('address4'); ?></u></p>
				</div>
				<br>
				<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=-eVUvX-Y_hoNYOTTnKXfbNasXCRsHa_j&width=100%&height=300&lang=ru_RU&sourceType=constructor"></script>
			</div>
		</div>
	</div>


<?php
get_footer();

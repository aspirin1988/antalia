<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Анталия | Цветы, букеты, оформление</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="background-image: url('<?php bloginfo('template_directory');?>/public/resources/background.jpg');" class="background"></div>
<div class="container">
	<header>

		<!---- top-block ---->
		<div class="top-nav">
			<div class="pull-left block">
				<ul class="pull-left">
					<li>Доставка</li>
					<li>по городу</li>
				</ul>
				<img   class="pull-right" src="<?php bloginfo('template_directory');?>/public/pic/transport.png" alt="Доставка">
			</div>
			<div class="pull-right block">
				<ul class="pull-right">
					<li><a href="tel:+77777777777">+7(777)777-77-77</a></li>
					<li><a href="tel:+77777777777">+7(777)777-77-77</a></li>
				</ul>
				<img class="pull-left" src="<?php bloginfo('template_directory');?>/public/pic/phone.png" alt="Телефоны">
			</div>
		</div>
		<!---- top-block ---->

		<!---- menu ---->
		<nav class="navbar navbar-default main-menu" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/" class="logo-normal"><img src="<?php echo the_field('logo');?>" alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php $menu=wp_get_nav_menu_items('left'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){?>
							<li class=""><?php the_title() ?> <a href="<?=$val->url?>"><?=$val->title?></a></li>
						<?php }}?>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Услуги</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Отзывы</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
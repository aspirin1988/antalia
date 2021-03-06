<?php include_once ('gallery.php');
$logo=get_gall('logo');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<?php $current_object=get_queried_object(); $field=get_option($current_object->taxonomy.'_'.$current_object->term_taxonomy_id) ?>
	<title>Анталия |
		<?php
		if (is_tax()||is_category()){
			$_title=$field['meta-title'];
			if ($_title){
				echo $_title;
			} else{
				if (get_field('meta-title')){
					the_field('meta-title');
				}else{
					the_title();}
			}
		}else{
			if (get_field('meta-title')){
				the_field('meta-title');
			}else{
				the_title();}
		}?>
	</title>
	<meta name="description" content="<?php if (is_tax()){ echo $field['meta-description'];}else{ the_field('meta-description');}?>"/>
	<link rel="shortcut icon" href="<?=get_field('favicon',6)?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/public/css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="background-image: url('<?php bloginfo('template_directory');?>/public/resources/background.jpg');" class="background"></div>
<div class="container">
	<header>

		<!--top-block-->
		<div class="top-nav">
			<a href="/доставка-цветов/">
			<div class="pull-left block">

				<ul class="pull-left">
					<li>Доставка</li>
					<li>по городу</li>
				</ul>
				<img   class="pull-right" src="<?php bloginfo('template_directory');?>/public/pic/transport.png" alt="Доставка">
			</div>
			</a>
			<div class="pull-right block">
				<ul class="pull-right">
					<li><a href="tel:<?php the_field('tel1',6); ?>"><?php the_field('tel1',6); ?></a></li>
					<li><a href="tel:<?php the_field('tel2',6); ?>"><?php the_field('tel2',6); ?></a></li>
				</ul>
				<img class="pull-left" src="<?php bloginfo('template_directory');?>/public/pic/phone.png" alt="Телефоны">
			</div>
		</div>
		<!--top-block-->

		<!--menu-->
		<nav class="navbar navbar-default main-menu" role="navigation">
			<div class="container-fluid">
				<!--Brand and toggle get grouped for better mobile display-->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="/" class="logo-normal"><img src="<?php the_field('logo',6);?>" alt="logo"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<?php $menu=wp_get_nav_menu_items('left'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='active';} ?>
							<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
						<?php }}?>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<?php $menu=wp_get_nav_menu_items('right'); /*print_r($menu);*/ foreach ($menu as $key=>$val) { if (!$val->menu_item_parent){ $class='';  $title=get_the_title(); if($title==$val->title){$class='active';} ?>
							<li class="<?php echo $class;?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
						<?php }}?>
					</ul>
				</div>
			</div>
		</nav>
	</header>
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
get_header();

$menu=wp_get_nav_menu_items('services');
$menu_new=array();

//echo print_r($menu,true);
foreach ($menu as $key=>$val) {
	$child=array();
	if (!$val->menu_item_parent) {
		foreach($menu as $value)
		{
			if ($value->menu_item_parent == $val->ID) {
				$child[]=$value;
			}
		}
		$menu_new[]=array('parent'=>$val,'child'=>$child);
		//$menu_new[count($menu_new)-1]['child']=$child;
	}
}
//echo print_r($menu_new,true);


?>

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
		<?php $col=0; foreach ($menu_new as $key=>$val) { if (!$val['parent']->menu_item_parent){
			if($col>=4){
			?>
			</div>
			<div class="row">
			<?php $col=0; } ?>
			<div class="col-sm-3 <?php if (count($val['child'])){?>dropdown<?php } ?>">
				<?php if (count($val['child'])){ ?>
				<div id="dLabel<?=$key?>" class="hower" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php } ?>
				<p><?php echo $val['parent']->post_title; ?></p>
				<img src="<?php echo  get_the_post_thumbnail_url($val['parent']->ID); ?>" alt="Голландские розы">
				<?php if (count($val['child'])){ ?>
				</div>
				<ul class="dropdown-menu" aria-labelledby="dLabel<?=$key?>">
					<li><h4><?php echo $val['parent']->post_title; ?>:</h4></li>

					<?php foreach($val['child'] as $value1) {
						if ($value1->menu_item_parent == $val['parent']->ID) {?>
							<li><p><a href="<?=$value1->url?>" ><?php echo $value1->title; ?></a></p></li>
							<?php
						}
					}
					?>
				</ul>
				<?php } ?>
				</div>
		<?php $col++;}}?>
		</div>
	</div>


<?php
get_footer();

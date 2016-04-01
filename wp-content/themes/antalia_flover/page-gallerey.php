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
//echo $offsett_post;
$count_page = get_gall_count('gallerey');
$count_page=ceil($count_page / $page);;
?>

	<!---- gallerey ---->
	<section class="page-container gallery">
	<?php $res=get_gall_matrix('gallerey',4,$page,$offsett_post); foreach ($res as $key=>$val) {?>
		<div class="row">
				<?php foreach($val as $val1){?>
			<div class="col-sm-3">
				<div onclick="showImage($(this))">
					<span class="glyphicon glyphicon-zoom-in"></span></div>
				<img src="<?=$val1['path']?>" alt="<?=$val1['alt']?>">
			</div>
		<?php } ?>

		</div>
		<?php }?>

		<?php if ($count_page>1){?>
		<nav>
			<ul class="pagination">
				<?php for($i=0;$i<$count_page;$i++) {?>
				<li><a href="/gallerey/<?=$i?>"><?=$i+1?></a></li>
				<?php } ?>
			</ul>
		</nav>
		<?php }?>
	</section>


<?php
get_footer();

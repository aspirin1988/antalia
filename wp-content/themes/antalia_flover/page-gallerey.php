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
$curent_page=$wp_query->query_vars['page'];
//echo $offsett_post;
$count_page = get_gall_count('gallerey');
$count_page=ceil($count_page / $page);
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
				<?php if ($curent_page>0){?>
				<li><a href="/gallerey/<?=0?>"><<</a></li>
				<li><a href="/gallerey/<?=$curent_page-1?>"><</a></li>
				<?php }$activ='active'?>

				<?php $ind=0; if($curent_page>2){$ind=$curent_page-2;}else{$ind=$curent_page;} for($i=$ind;$i<$curent_page+3;$i++) { if ($i<$count_page){ ?>
				<li class="<?php if($i==$curent_page){echo $activ;}?>"><a  href="/gallerey/<?=$i?>"><?=$i+1?></a></li>
				<?php }} ?>
				<?php if ($curent_page<$count_page-1){ ?>
					<li><a href="/gallerey/<?=$curent_page+1?>">></a></li>
					<li><a href="/gallerey/<?=$count_page-1?>">>></a></li>
				<?php }?>
			</ul>
		</nav>
		<?php }?>
	</section>


<?php
get_footer();

<?php
/*
# ==================================================
# header.php
#
# The theme header.
# ==================================================
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php wp_title( '|', true, 'right'); ?> <?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=1024">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style-1.5.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/lightbox.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
	<div class="main-container">
		<div id="Menu">
			<span class="Name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:#000;"><?php bloginfo( 'name' ); ?></a></span>
			<div style="margin-top:40px; text-transform:uppercase; font-size:11px; letter-spacing:1px;">
				<div style="text-transform:none; font-size:12px; font-family:tahoma; text-align:left; margin:10px 0px; padding-left:10px;">
					<?php
						$args = array(
							'orderby' => 'name',
							'order' => 'ASC',
							'hide_empty' => false
						);
						$categories = get_categories( $args );
						foreach ($categories as $category) {
							echo '<div><a href="'. get_category_link($category->term_id) .'">' . $category-> name .'</a></div>';
						}
						?>
				</div>
			</div>

			<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
				<?php	wp_page_menu(array('menu_class' => 'nav-menu')); ?>
			</nav>
		</div>
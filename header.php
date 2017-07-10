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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/lightbox.css">
		<script src="<?php echo get_template_directory_uri();?>/js/jquery-1.10.2.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/lightbox-2.6.min.js" type="text/javascript"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
		<div id="Menu" style="top:80px; left:900px; position:fixed; text-align:center;">
			<span class="Name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color:#000;">单馨漫</a></span>
			<div style="margin-top:40px; text-transform:uppercase; font-size:11px; letter-spacing:1px;">
				<div><span style="padding-right:30px; color:#ccc;">摄影作品</span></div>

				<div style="text-transform:none; font-size:12px; font-family:tahoma; text-align:left; margin:10px 0px; padding-left:10px;">
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Portraits</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">New York</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Dancers</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Nude</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Hidden</a></div>
					<div><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Self Portraits</a></div>
				</div>
			</div>
		</div>
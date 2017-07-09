<?php
/*
# ==================================================
# content.php
#
# The theme content.
# ==================================================
*/
?>

<?php if (has_post_thumbnail() ) : ?>
	<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="Dancers">
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'f' ) ); ?>
	</a>
<?php endif; ?>

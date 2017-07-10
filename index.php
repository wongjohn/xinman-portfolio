<?php
/*
# ==========================================================
# index.php
#
# The main template file.
# ==========================================================
*/
?>
<?php
/* Load header.php. */
get_header();
?>

<div style="left:160px; top:60px; position:absolute;">
    <div style="width:700px; margin:20px 0px;">
        <div class="image-row">
            <div class="image-set">
                <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

                <?php else : ?>
                    <?php get_template_part( 'content', 'none' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

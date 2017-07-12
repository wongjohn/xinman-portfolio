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
                <?php
                    while( have_posts() ) : the_post();
                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    endwhile;
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>

<?php
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $post_id = 827;
            $queried_post = get_post($post_id);
            echo $queried_post->post_content;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

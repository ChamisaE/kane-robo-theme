<?php
get_header(); ?>

<div class="rr rr-left">
    <div>
        <h2 class="section-heading">Products</h2>
        <p>
        <?php
        if (have_posts()) :
        while (have_posts()) :
            the_post();
                the_content();
        endwhile;
        endif;?>
        </p>
    </div>
</div>
<div class="rr rr-right">
</div>

<?php get_footer();  ?>

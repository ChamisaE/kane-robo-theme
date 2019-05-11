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

<div class="mobile">
<img class="center services" src="<?php echo get_template_directory_uri(); ?>/img/spacex.jpg" alt = "Card Image" >
<h2 class="section-heading" id="products">Products</h2>
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

<?php get_footer();  ?>

<?php get_header(); ?>

    <main>
        <a href="<?php echo site_url('/services');?>">
            <h2 class="page-heading">Services</h2>
        </a>

<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
		the_content();
	endwhile;
endif;?>

       <?php get_footer(); ?>
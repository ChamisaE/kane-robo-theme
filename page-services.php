<?php get_header(); ?>

    <main>
        <a href="<?php echo site_url('/services');?>">
            <h2 class="page-heading">Services</h2>
        </a>
<section>
<?php
if (have_posts()) :
    while (have_posts()) : ?>
    
    <div class="card">
        <?php  the_post();?>
        <div class="card-description">
        <?php the_content(); ?>
        </div>
    </div>
        
	<?php endwhile;
endif;?>
<section>
    
       <?php get_footer(); ?>
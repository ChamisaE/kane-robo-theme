<?php get_header(); ?>

    <main>
        <a href="<?php echo site_url('/services');?>">
            <h2 class="page-heading">Services</h2>
        </a>
		<div class="pagination">
        <?php echo paginate_links(); ?></div>

       <?php get_footer(); ?>
<?php get_header(); ?>

    

    <main>
        <a href="<?php echo site_url('/products');?>">
            <h2 class="page-heading">Products</h2>
        </a>

        <section>

        <?php 
        $args = array(
            'post_type' => 'products',
            'posts_per_page' => 4,

        );
        $products = new WP_Query($args);

        while ($products->have_posts()) {
            $products->the_post();
        

        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                    alt = "Card Image">

                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    
                    <p>
                        <?php echo the_content(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php }
             wp_reset_query(); 
             ?>


        </section>

        <div class="pagination">
        <?php echo paginate_links(); ?></div>


<!-- dropped from about-->

	<section>
	<div class="card">
		<div class="card-description">
			<h2>
				<strong>We bring recent innovations in robotics and sensors together to provide off-the-shelf solutions.</strong>
			</h2>
			<h4>
				Our cobot systems are:
			</h4>
			<ul>
				<li>Standardized - "off-the-shelf" products with little to no customer integration time</li>
				<li>Low-cost - six-figure capital expenditure rather than traditional seven or eight</li>
				<li>Collaborative - safely utilised next to human co-workers, no special enclosures required</li>
				<li>Flexible - easily reconfigured and redeployed to other high-mix/low-volume tasks</li>
			</ul>
		</div>
	</div>
<?php get_footer(); ?>
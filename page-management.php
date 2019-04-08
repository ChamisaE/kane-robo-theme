<?php get_header(); ?>

    
<main>
        <a href="<?php echo site_url('/management');?>">
            <h2 class="page-heading">Management</h2>
        </a>

        <section>

        <?php 
        $args = array(
            'post_type' => 'management',
            'posts_per_page' => 8,

        );
        $management = new WP_Query($args);

        while ($management->have_posts()) {
            $management->the_post();
        

        ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                    <img class ="center" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
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
                    
                </div>
            </div>

            <?php }
             wp_reset_query(); 
             ?>


        </section>

        <div class="pagination">
        <?php echo paginate_links(); ?></div>

        
        	

       <?php get_footer(); ?>
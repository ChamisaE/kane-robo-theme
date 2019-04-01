<?php get_header(); ?>

    

    <main>
        <a href="<?php echo site_url('/events');?>">
            <h2 class="page-heading">Events</h2>
        </a>

    
        <?php 
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => 8,

        );
        $events = new WP_Query($args);

        while ($events->have_posts()) {
            $events->the_post();
        

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
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php }
             wp_reset_query(); 
             ?>


        </div>

       

        <div class="pagination">
        <?php echo paginate_links(); ?></div>

        
        	

       <?php get_footer(); ?>
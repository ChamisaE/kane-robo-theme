/**
* Template Name: Team
*

*/
<?php get_header(); ?>

    

    <main>
        <a href="<?php echo site_url('/team');?>">
            <h2 class="page-heading">Team</h2>
        </a>

        <section>

        <?php 
        $args = array(
            'post_type' => 'team',
            'posts_per_page' => 4,

        );
        $team = new WP_Query($args);

        while ($team->have_posts()) {
            $team->the_post();
        

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


        </section>

        <div class="pagination">
        <?php echo paginate_links(); ?></div>

        
        	

       <?php get_footer(); ?>
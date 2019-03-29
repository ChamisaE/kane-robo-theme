<?php get_header(); ?>

    <div id="banner">
        
    </div>
    <div id="divider">
        </div>


    <main>
        <a href="<?php echo site_url('/events');?>">
            <h2 class="section-heading">Events</h2>
        </a>

        <section>

        
        <?php 
        $args = array(
            'post_type' => 'event',
            'posts_per_page' => 1,

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


        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.8995989838268!2d-106.64871538482598!3d35.084241280337764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87220d816a9f8e89%3A0xe9927a14716e8ac2!2sBuild+With+Robots!5e0!3m2!1sen!2sus!4v1552506375070" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        

       <?php get_footer(); ?>
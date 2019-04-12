<?php get_header(); ?>

    <div id="banner">
        
    </div>
    <div id="divider">
    </div>
    <main>
        <a href="<?php echo site_url('/products');?>">
            <h2 class="section-heading">Products</h2>
        </a>

           <?php
            // query for the products page
            $products = new WP_Query( 'pagename=products' );
            // "loop" through query (even though it's just one page) 
            while ( $products->have_posts() ) : $products->the_post(); ?>
                <?php the_content();?>
            <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>

        <a href="<?php echo site_url('/services');?>">
            <h2 class="section-heading">Services</h2>
        </a>

           <div class="services-section">
           <?php
            // query for the services page
            $services = new WP_Query( 'pagename=services' );
            // "loop" through query (even though it's just one page) 
            while ( $services->have_posts() ) : $services->the_post(); ?>
            
            <div class="services-card">
                <?php the_content();?>
            </div>
            
            <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
            </div>


    
    

       <?php get_footer(); ?>
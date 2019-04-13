<?php get_header(); ?>

    <div id="banner">
    </div>

    <div id="divider">
    </div> 
    
    <div class="skew-cc"></div> 

    <main>
        
        <a href="<?php echo site_url('/products');?>">
            <h2 id="products">Products</h2>
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
    
    </main>
    <div class="skew-c"></div>
    
    <div class="services-section">
        <a href="<?php echo site_url('/services');?>">
            <h2 id="services">Services</h2>
        </a>

           
           <?php
            // query for the services page
            $services = new WP_Query( 'pagename=services' );
            // "loop" through query (even though it's just one page) 
            while ( $services->have_posts() ) : $services->the_post(); ?>
            
            <div class="card">
                <?php the_content();?>
            </div>
            
            <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
            </div>

            </div>


       <?php get_footer(); ?>
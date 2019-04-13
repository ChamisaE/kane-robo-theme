<?php get_header(); ?>

    <div id="banner">
    </div>

    <div id="divider">
    </div> 
    
    <div class="skew-cc"></div> 

    <main>
    <div class="products-section">
        <a href="<?php echo site_url('/products');?>">
         
            <h2 id="products" class="section-heading">Products</h2>
        </a>

           <?php
            // query for the products page
            $products = new WP_Query( 'pagename=products' );
            // "loop" through query (even though it's just one page) 
            while ( $products->have_posts() ) : $products->the_post(); ?>
            <div class="card">
                <?php the_content();?>
                </div>
                <a href="<?php the_permalink(); ?>" id="products-btn" class="btn-readmore">Read more</a>
                
            <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
         
</div>
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
            <a href="<?php the_permalink(); ?>" id="services-btn" class="btn-readmore">Read more</a>
            <?php endwhile;
            // reset post data (important!)
            wp_reset_postdata();
            ?>
            
            </div>

            </div>
            <div class="skew-cc"></div> 
            <div class="end"></div>
            


       <?php get_footer(); ?>
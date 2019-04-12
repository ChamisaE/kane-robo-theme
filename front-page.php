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



        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3264.8995989838268!2d-106.64871538482598!3d35.084241280337764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87220d816a9f8e89%3A0xe9927a14716e8ac2!2sBuild+With+Robots!5e0!3m2!1sen!2sus!4v1552506375070" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        

       <?php get_footer(); ?>
<?php
get_header(); ?>

<div class="rr rr-left">
    <div>
        <h2 class="section-heading">Products</h2>
		 <h3><strong>Cobot-based sanding, grinding and finishing system</strong></h3><br/>
		 <h3>Precision bond-prep of composite aerostructures</h3>
		 <ul>
			 <li>Curved surfaces</li>
			 <li>Grinding and random orbital sanding option</li>
			 <li>Conversion of CAD files for pattern-specific bond prep</li>
		 </ul>
		 <h3 align="left">Portable</h3>
		 <h3 align="left">Real-time process communications</h3>
		 <h3 align="left">Remote monitoring and operation</h3>
        <p>
        <?php
        if (have_posts()) :
        while (have_posts()) :
            the_post();
                the_content();
        endwhile;
        endif;?>
        </p>
    </div>
</div>
<div class="rr rr-right">
	<iframe width="570" height="315" src="https://www.youtube.com/embed/Dznn21nT3SQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

<div class="mobile">
<img class="center services" src="<?php echo get_template_directory_uri(); ?>/img/spacex.jpg" alt = "Card Image" >
<h2 class="section-heading" id="products">Products</h2>
        <p>
        <?php
        if (have_posts()) :
        while (have_posts()) :
            the_post();
                the_content();
        endwhile;
        endif;?>
        </p>


</div>

<?php get_footer();  ?>

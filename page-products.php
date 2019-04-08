<?php
get_header(); ?>

<main>
<a href="<?php echo site_url('/products');?>">
            <h2 class="page-heading">Products</h2>
        </a>

<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

get_footer();  ?>

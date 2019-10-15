<?php
/* Template Name: contact */
get_header(); ?>
<div class="Inner_Page">
<div class="inner_con_sec">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <h2><?php the_field('contact_heading'); ?></h2>
    </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
     	<div class="iframe"><?php the_field('map_frame')?></div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
     </div>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- inner_con_sec -->








</div><!-- Inner_Page -->

<?php get_footer(); ?>
<?php
/* Template Name: Home Support */
get_header(); ?>
<div class="Inner_Page">
<div class="inner_con_sec">
  <div class="container">
    <div class="row">
      
        <div class="<?php if(has_post_thumbnail()){ ?>col-lg-8 col-md-8 col-sm-12 col-xs-12<?php }else{?>col-lg-12<?php }?> pad0 pull-right">
      <div class="inner_conR_txt">
        <h1><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      </div><!-- inner_conR_txt -->
    </div>
<?php if(has_post_thumbnail()){ ?>
     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 innLeft_pic">

        <figure>
           <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </figure>
      </div><!-- innLeft_pic -->
        <?php } ?>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- inner_con_sec -->
 <div class="service">
  <div class="container padlr0">
    
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 service_section padlr0">
        <?php the_field('support_first_section')?>
      </div>
    
    
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 service_section padlr0">
        <?php the_field('support_second_section')?>
      </div>
    
</div>
  
   
 </div>
<div class="work_sec">
  <div class="container">
    <div class="row">
   
        <div class="<?php if(get_field('work_image')){ ?>col-lg-8 col-md-8 col-sm-12 col-xs-12<?php }else{?>col-lg-12<?php }?> pad0 pull-right">
      <div class="work_conR_txt">
        <h2><?php the_field('work_heading')?></h2>
       <?php the_field('work_content')?>
      </div><!-- inner_conR_txt -->
    </div>
   <?php if(get_field('work_image')){ ?>
     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 workLeft_pic">
        <?php $image = get_field('work_image'); ?>
        <figure>
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>">
        </figure>
      </div><!-- innLeft_pic -->
        <?php } ?>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- inner_con_sec -->
<div class="our-services">
  <div class="container">
    <h2 class="text-center">Our Services</h2>
    <ul>
      <?php if( have_rows('our_services') ): ?>
            <?php $i=0; while( have_rows('our_services') ): the_row(); ?>
            <li><?php the_sub_field('service_features')?></li>
    
     <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>




<div class="home-support">
 <?php if( have_rows('home_area') ): ?>
  <div class="container">
  
    <div class="row" id="virus_computer_home">
     
      <?php while( have_rows('home_area') ): the_row(); ?>

      <div class="col-xs-12 col-sm-4 col-md-4">
      <div class="home-support-sec-box">
        <div class="home-support-sec">
         <?php $image = get_sub_field('home_image'); ?>
          <figure> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>"> </figure>
        </div><!-- funct_pic_sec -->
        <div class="home-support-txt">
          <h6><?php the_sub_field('home_heading')?></h6>
          <p><?php the_sub_field('home_text')?></p>
        </div><!-- funct_txt -->
      </div><!-- funct_colm_box -->
      </div><!-- funct_colm -->
<?php endwhile; ?>

    </div><!-- row -->
  </div><!-- container -->
  <?php endif; ?>

</div><!-- functional_area_sec -->

<div class="all-services">
  <div class="container">
<ul>
  <?php if( have_rows('all_services_area') ): ?>
     <?php while( have_rows('all_services_area') ): the_row(); ?>
  <li>
     <?php $image = get_sub_field('all_services_image'); ?>
   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>">
    <?php the_sub_field('all_services_heading')?>
    <p><?php the_sub_field('all_services_text')?></p>
  </li>
  <?php endwhile; ?>
   <?php endif; ?>
</ul>
</div>
</div>
</div><!-- Inner_Page -->

<?php get_footer(); ?>
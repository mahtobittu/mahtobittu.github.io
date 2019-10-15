<?php
/* Template Name: About Us */
get_header(); ?>
<div class="Inner_Page">
<div class="inner_con_sec">
  <div class="container">
    <div class="row">
    
        <div class="<?php if(has_post_thumbnail()){ ?>col-lg-7 col-md-7 col-sm-12 col-xs-12<?php }else{?>col-lg-12<?php }?> pad0">
      <div class="inner_conR_txt">
        <h1><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      </div><!-- inner_conR_txt -->
    </div>
  <?php if(has_post_thumbnail()){ ?>
     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 innLeft_pic">
        <figure>
           <img src="<?php the_post_thumbnail_url(); ?>" alt="">
        </figure>
      </div><!-- innLeft_pic -->
        <?php } ?>
    </div><!-- row -->
  </div><!-- container -->
</div><!-- inner_con_sec -->
 

<div class="functional_area_sec">
   <?php if(get_field('functional_heading')){ ?>
             <h2><?php the_field('functional_heading')?></h2>
          <?php }else{ ?>
             
            <?php } ?>
 <?php if( have_rows('functional_area') ): ?>
  <div class="container">
  
    <div class="row">
     
      <?php while( have_rows('functional_area') ): the_row(); ?>

      <div class="col-xs-12 col-sm-4 col-md-4 funct_colm">
      <div class="funct_colm_box">
        <div class="funct_pic_sec">
          <?php $image = get_sub_field('functional_image'); ?>
          <figure>
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>">
          </figure>
        </div><!-- funct_pic_sec -->
        <div class="funct_txt">
          <p><?php the_sub_field('functional_text')?></p>
        </div><!-- funct_txt -->
      </div><!-- funct_colm_box -->
      </div><!-- funct_colm -->
<?php endwhile; ?>

    </div><!-- row -->
  </div><!-- container -->
  <?php endif; ?>

</div><!-- functional_area_sec -->
<?php if(get_field('mission_heading')){ ?>
<div class="mission_visson_sec">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 mis_vis_con">
        <?php if(get_field('mission_heading')){ ?>
               <h3><?php the_field('mission_heading'); ?></h3>  
          
    
      <?php }else{ ?>
              
            <?php } ?>
            <?php if(get_field('mission_text')){ ?>
      <p><?php the_field('mission_text'); ?></p>
      <?php }else{ ?>
              
            <?php } ?>
      </div><!-- mis_vis_con -->
      <div class="col-xs-12 col-sm-6 col-md-6 mis_vis_con">
            <?php if(get_field('vision_heading')){ ?>
               <h3><?php the_field('vision_heading'); ?></h3>  
            <?php }else{ ?>
              <?php } ?>
              <?php if(get_field('vision_text')){ ?>
            <p><?php the_field('vision_text'); ?></p>
              <?php }else{ ?>
              <?php } ?>
      </div><!-- mis_vis_con -->
   </div><!-- row -->
  </div><!-- container -->
</div><!-- mission_visson_sec -->
 <?php }else{ ?>
              
            <?php } ?>
</div><!-- Inner_Page -->

<?php get_footer(); ?>
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="Inner_Page">
<div class="inner_con_sec">
  <div class="container">
    <div class="row">
    
        <div class="<?php if(has_post_thumbnail()){ ?>col-lg-7 col-md-7 col-sm-12 col-xs-12<?php }else{?>col-lg-12<?php }?> pad0 pull-right">
      <div class="inner_conR_txt">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
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
 

 
  
 
<?php if ( have_rows('extra_sections') ): ?>
<div class="container">

   <?php while ( have_rows('extra_sections') ) : the_row(); ?>
<?php $image = get_sub_field('image'); ?>
<div class="feature">
   
    <?php if($image['url']){ ?>
     <div class="feature_pic">
      
       <figure>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo  $image['alt']; ?>">
       </figure>
      
     </div><!-- feature_pic_sec -->
      <?php } else{?>
      <?php }?>


       <?php the_sub_field('info'); ?>


     </div>
    <?php  endwhile; ?>
 </div>

<?php endif;?>

</div><!-- Inner_Page -->
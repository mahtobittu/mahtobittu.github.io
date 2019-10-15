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

<div class="container">
	<h4 id='slideheader'>Anti-Virus & Security</h4>
   <section class="customer-logos slider">
	  <div class="slide brand-slide"><img src="https://inspnet.in/wp-content/uploads/2019/06/Untitled-1-01.svg"></div>
      <div class="slide brand-slide"><img src="https://inspnet.in/wp-content/uploads/2019/06/Untitled-1-03.svg"></div>
      <div class="slide brand-slide"><img src="https://inspnet.in/wp-content/uploads/2019/06/Untitled-1-02.svg"></div>     
     <div class="slide brand-slide"><img src="https://inspnet.in/wp-content/uploads/2019/06/Untitled-1-04.svg"></div>    
   </section>
</div>


<div class="main_contain">
  <div class="bussin_sec">
    <div class="container">
    <p><?php the_field('first_heading')?></p>
    <h1><?php the_field('second_heading')?></h1>
    <?php if( have_rows('service_section') ): ?>
      <div class="row">
        <?php while( have_rows('service_section') ): the_row(); ?>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bussin_box">
          <div class="bussin_box_sec">
            <div class="bussin_boxL">
              <h2><?php the_sub_field('service_title'); ?></h2>
            </div><!-- bussin_boxL -->
            <div class="bussin_boxR">
               <?php if( have_rows('service_features') ): ?>
              <ul class="bussin_box_list">
               
<?php $i=1; while( have_rows('service_features') ): the_row(); ?>
                <li>
                <div class="bussin_box_list_cir">
                <span>0<?php echo $i; ?></span>
                </div><!-- bussin_box_list_cir -->
                <div class="bussin_box_para">
                <a href="<?php the_sub_field('service_point')?>"><?php the_sub_field('service_features_point')?></a>
                </div><!-- bussin_box_para -->
                </li>
                 <?php 
                 $i++;
                 endwhile; ?>
              

              </ul>
                <?php endif; ?>
            </div><!-- bussin_boxR -->
          </div><!-- bussin_box_sec -->
        </div><!-- bussin_box -->
        <?php endwhile; ?>
       
      </div><!-- row -->
       <?php endif; ?>
    </div><!-- container -->
  </div><!-- bussin_sec -->
  <div class="chose_sec">
    <div class="container">
      <div class="cus_heding">
        <h2>
          <span>WHY TO</span>
          <strong>CHOOSE US?</strong>
        </h2>
        <p><?php the_field('choose_text')?></p>
      </div><!-- cus_heding -->
      <?php if( have_rows('choose_section') ): ?>
      <div class="row clerBoth">
         
        <?php while( have_rows('choose_section') ): the_row(); ?>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 chose_box">
         <div class="chose_top_box">
          <?php $image = get_sub_field('icon_image'); ?>
           <figure class="chose_icon">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>" >
           </figure>
           <h3><?php the_sub_field('choose_heading')?></h3>
         </div><!-- chose_top_box -->
         <div class="chose_btm_box">
            <div class="chose_btm_box_con">
              <p><?php the_sub_field('choose_section_text')?></p>
            </div><!-- chose_btm_box_con -->
         </div><!-- chose_btm_box -->
        </div><!-- chose_box -->

<?php endwhile; ?>
      </div><!-- row -->
      <?php endif; ?>

    </div><!-- container -->
  </div><!-- chose_sec -->
   <?php if( have_rows('home_support_section') ): ?>
  <div class="home_suprt_sec">
    <div class="container">
     <?php while( have_rows('home_support_section') ): the_row(); ?>
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 comn_suprt_box">
        <div class="comn_suprt_pic_sec">
           <?php $image = get_sub_field('home_support_section_image'); ?>
          <figure class="comn_suprt_FrontPic">
             <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>" >
          </figure>
          <?php $image = get_sub_field('home_support_section_image'); ?>
          <figure class="comn_suprt_BackPic">
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>" >
          </figure>
        </div><!-- comn_suprt_pic_sec -->
        </div><!-- comn_suprt_box -->
        <div class="col-xs-12 col-sm-12 col-md-6 comn_suprt_box">
        <div class="cus_heding cus_hedingL">
          <h2>
            <span><?php the_sub_field('home_text')?></span>
            <strong><?php the_sub_field('support_text')?></strong>
          </h2>
          <p><?php the_sub_field('home_support_text')?></p>
      </div><!-- cus_heding -->
        <div class="comn_suprt_txt_sec">
          <?php if( have_rows('home_support_features') ): ?>
          <ul class="bullet_list comn_suprtList">
            <?php while( have_rows('home_support_features') ): the_row(); ?>
          <li><?php the_sub_field('home_support_features_text')?></li>
        <?php endwhile; ?>

          </ul>
          <?php endif; ?>

          <div class="btn_sec">
          <a href="<?php the_sub_field('home_support_link')?>" class="blue_btn">read more</a>
          </div><!-- btn_sec -->
        </div><!-- comn_suprt_txt_sec -->
        </div><!-- comn_suprt_box -->
        
      </div><!-- row -->
      <?php endwhile; ?>
    </div><!-- container -->
  </div><!-- home_suprt_sec -->
<?php endif; ?>
 <?php if( have_rows('business_support_section') ): ?>
  <div class="bussi_suprt_sec">
    <div class="container"> 
    <?php while( have_rows('business_support_section') ): the_row(); ?>       
      <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 comn_suprt_box">
        <div class="comn_suprt_pic_sec">
            <?php $image = get_sub_field('business_support_section_image'); ?>
          <figure class="comn_suprt_FrontPic">
           <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
          </figure>
          <?php $image = get_sub_field('business_support_section_image'); ?>
          <figure class="comn_suprt_BackPic">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
          </figure>
        </div><!-- comn_suprt_pic_sec -->
        </div><!-- comn_suprt_box -->
        <div class="col-xs-12 col-sm-12 col-md-6 comn_suprt_box">
          <div class="cus_heding cus_hedingL">
            <h2>
             <span><?php the_sub_field('business_text')?></span>
            <strong><?php the_sub_field('support_text')?></strong>
            </h2>
            <p><?php the_sub_field('business_support_text')?></p>
          </div><!-- cus_heding -->
          <div class="comn_suprt_txt_sec">
           <?php if( have_rows('business_support_features') ): ?>
          <ul class="bullet_list comn_suprtList">
            <?php while( have_rows('business_support_features') ): the_row(); ?>
          <li><?php the_sub_field('business_support_features_text')?></li>
        <?php endwhile; ?>

          </ul>
          <?php endif; ?>
            <div class="btn_sec">
            <a href="<?php the_sub_field('business_support_link')?>"" class="blue_btn">read more</a>
            </div><!-- btn_sec -->
          </div><!-- comn_suprt_txt_sec -->
        </div><!-- comn_suprt_box -->
        
      </div><!-- row -->
       <?php endwhile; ?>
    </div><!-- container -->
  </div><!-- bussi_suprt_sec -->
  <?php endif; ?>
</div><!-- main_contain -->

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer class="main_footer">
  <div class="f_top_sec">
    <div class="container">
      <div class="row f_left_pad">
        <div class="col-xs-12 col-sm-6 f_topL">
        <div class="row">
          <div class="col-xs-12 col-sm-6 f_heading f_top_colm">
            <h4>Contact Us</h4>
            <ul class="f_address_sec">
              <li>
              <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/call_icon.png" alt=""></span>
              <a href="tel:<?php the_field('footer_ph', 'option') ?>"><?php the_field('footer_ph', 'option') ?></a>
              </li>
               <li>
              <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail_icon.png" alt=""></span>
              <a href="mailto:<?php the_field('footer_mail', 'option') ?>"><?php the_field('footer_mail', 'option') ?></a>
              </li>
            </ul>

          </div><!-- f_top_colm -->
           <div class="col-xs-12 col-sm-6 f_top_colm f_heading">
             <h4>INFO</h4>
             <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => 'ul', 'menu_class'=> 'bullet_list b_color f_top_colmList') ); ?>
          
           </div><!-- f_top_colm -->
        </div><!-- row -->
        </div><!-- f_topL -->

         <div class="col-xs-12 col-sm-6 f_topR">
         	<?php the_field('footer_text', 'option') ?>
         
        </div><!-- f_topL -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- f_top_sec -->
  
  <div class="f_btm_sec">
    <div class="container">
      <div class="row f_left_pad">
      <div class="f_btm_Con">
        <h4>Device Support</h4>
         <?php if( have_rows('lower_footer', 'option') ): ?>
           <?php while( have_rows('lower_footer' , 'option') ): the_row(); ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 f_btmL f_heading">
        <div class="f_btmL_con">
          
         
          <h5><?php the_sub_field('footer_service_heading' , 'option')?></h5>
          <ul class="bullet_list b_color f_btmList">
             <?php if(have_rows('footer_service' , 'option') ): ?>
              <?php while(have_rows('footer_service' ,'option') ) : the_row();?>
            <li><a href="<?php the_sub_field('footer_service_link', 'option')?>"><?php the_sub_field('footer_service_text', 'option')?></a></li>
          <?php endwhile; ?>
              <?php endif; ?>
          </ul>
        
          </div><!-- f_btmL_con -->
        </div><!-- f_btmL -->
        <?php endwhile; ?>
 <?php endif; ?>
        </div><!-- f_btm_Con -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- f_btm_sec -->
  <div class="f_copy_sec">
    <p>&copy; <?php echo date("Y"); ?><a href="<?php bloginfo('url'); ?>"> Inspnet.</a> All Rights Reserved. | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> </p>
  </div><!-- f_copy_sec -->
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.slimmenu.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/float-panel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<?php wp_footer(); ?>

</body>
</html>

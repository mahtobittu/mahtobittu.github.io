<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
  <meta name="description" content=""/>
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slimmenu.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- google crowler  -->
	<meta name="google-site-verification" content="ZdwPZ1CQnS1pKFq2geOzKAJmyVaN7DFJ6MrwvOWCKJU" />
	<!-- Facebook Pixel Code -->

	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-8656816806118551",
    enable_page_level_ads: true
  });
</script>
	
	
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700,800%7cPoppins:100,200,300,300i,400,500,600,700,800,900" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="main_header" data-spy="affix" data-offset-top="164">
  <div class="top_hed">
    <div class="container">
      
      <div class="top_address">
        <ul class="top_address_sec">		
			
			    <li><i class="fas fa-phone "></i><a class='ico' href="tel:<?php the_field('phone_number', 'option') ?>"><?php the_field('phone_number', 'option') ?></a></li>
          <li><i class="fas fa-envelope "></i><a class='ico' href="mailto:<?php the_field('mail_id', 'option') ?>"><?php the_field('mail_id', 'option') ?></a></li>	
			
		<li class="social"><a href="https://www.facebook.com/pg/Inspnet.IT/"><i class="fab fa-facebook-square"></i></a></li>
			<li class="social"><a href="https://in.linkedin.com/company/inspnet-it-support-and-services
"><i class="fab fa-linkedin"></i></a></li>
			<li class="social"><a href="https://twitter.com/inspnet
"><i class="fab fa-twitter-square"></i></a></li>
			<li class="social insta"><a href="https://instagram.com/inspnet?utm_source=ig_profile_share&igshid=1nm97w4mvj680"><i class=" fab fa-instagram"></i></a></li>
			
      
			
        </ul>		  
      </div><!-- top_address -->
    </div><!-- container -->
  </div><!-- top_hed -->
  <div class="btm_hed">
    <div class="container">
      <nav class="main_menu">
      <div class="logo_sec">
        <a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php $image = get_field('logo','option'); echo($image['url']); ?>" alt="<?php $image = get_field('logo','option'); echo($image['alt']); ?>"></a>
      </div><!-- logo_sec -->
      
         <?php wp_nav_menu( array( 'theme_location' => 'header', 'container' => 'ul', 'menu_class'=> 'slimmenu') ); ?>
      </nav>
    </div><!-- container -->
  </div><!-- btm_hed -->
</header>
 <?php if(is_front_page()){ ?>
<div class="banner">
  <div id="" class="carousel slide" data-ride="carousel">
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <?php if( have_rows('banner') ): ?>
            <?php $i=0; while( have_rows('banner') ): the_row(); ?>
              <?php $image = get_sub_field('banner_image'); ?>
    <div class="item <?php if($i<=0){echo 'active';} ?>">
      <figure class="slider-Img">
       <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']  ?>">
      </figure>
      <div class="cus_cap_sec">
      <div class="container">
      <div class="cus_cap">    
         <p><?php the_sub_field('banner_text'); ?></p>
         <strong><?php the_sub_field('banner_text1'); ?></strong>
         <a href="<?php the_sub_field('banner_text_link'); ?>"><?php the_sub_field('banner_text2'); ?></a>
        </div><!-- cus_cap -->         
        </div><!-- container -->      
        </div><!-- cus_cap_sec -->      
    </div><!-- item -->
     <?php 
          $i++;
          endwhile; ?>
          <?php endif; ?>
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left sli_nav"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right sli_nav"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div><!-- carousel-inner -->
</div><!-- myCarousel -->
</div><!-- banner -->
<?php } else {?>
<div class="Inner_banner">
  <?php $image = get_field('inner_banner_image'); ?>

  <?php if( !empty($image) ){ ?>
    <figure class="Inner_banner_img">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
    <figure>
<?php } else{ ?>
    <figure class="Inner_banner_img">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/inner_banner.jpg">
    </figure>
     <?php } ?>
</div><!-- Inner_banner -->
<?php } ?>
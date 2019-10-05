<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dorothye lizabeth love</title>
    <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body> 
     
    <section class="banner">
      <div class="container">
           
        <div class="banner-all">
            <div class="banner-item">
                <?php
                $the_query = new WP_Query( array('post_type' => 'banner') ); ?>
 
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php $banner_logo = get_field('banner_logo') ?>

                <img src="<?php echo get_field('banner_logo')['url']; ?>" alt="">
                <p>"<?php the_field('banner_details') ?>"</p>
                <h3>- <?php the_field('header_title') ?></h3>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
        </div>
        <!-- end banner -->
    </section>

     <header class="header">
        <div class="container">
            <div class="hdr_inner">
            <div class="logo-img">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo.png" alt="site_logo"> -->
                <?php if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
               }?>
            </div>
            <!-- <div class="menu">
                <ul>
                    <li><a href="">Home</a></li>  
                    <li><a href="">Contemporary fiction</a></li> 
                    <li><a href="">Non fiction</a></li> 
                    <li><a href="">Meet The author</a></li> 
                    <li><a href="">What others say</a></li> 
                </ul>
            </div> -->
            <?php dynamic_sidebar( 'header' ) ?>
            </div>
        </div>
    </header> 

    <section class="author">
        <div class="container">
            <div class="row">
                  <?php
                $the_query = new WP_Query( array('post_type' => 'dorothy') ); ?>
 
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-5 author-image">
                    <img src="<?php echo get_field('dorothy')['url'];  ?>" alt="">
                </div>
                    <div class="col-md-7 author_text">
                        <h1><?php the_field('author_title'); ?></h1>
                        <p><?php the_field('author_details'); ?></p>
                           <a href="<?php the_field('button'); ?>">Meet the Author</a>
                    </div>
            <?php endwhile; ?>
            <?php endif; ?>
             </div>
        </div>
    </section>
    <!-- end author -->

    <section class="Contemporary">
        <div class="container">
        <h2>Contemporary Fiction</h2>
       <div class="linebar">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/image/linebar.png" alt="linebar">
       </div>
        <div class="row">
              <?php
                $the_query = new WP_Query( array('post_type' => 'fiction') ); ?>
 
                <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-3 book">
            <img src="<?php the_field('book'); ?>" alt="bookimg">
            <a href=""><span><?php the_field('read_text');?></span><i class="<?php the_field('play_icon');?>"></i></a>
            </div>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
    

    </section>

<!-- link section start -->
    <section class="link">
        <div class="container">
            <?php $the_query = new WP_Query(array('post_type' => 'visit_me') ); ?>
            <?php if ($the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
           <button> <a href="<?php the_field('visit_button'); ?>"><?php the_field('visit_me_on');?><img src="<?php the_field('amazon'); ?>" alt="amazon"></a></button>
       <?php endwhile;?>
   <?php endif; ?>
        </div>
    </section>
    <!-- link section end -->
    <!-- slider section start -->

    <section class="slider">

     <div class="container">
            <h2>What Others Say</h2>
             <div class="linebar">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/image/linebar.png" alt="linebar">
             </div>
            <div id="customers-testimonials" class="owl-carousel">
                <?php $the_query = new WP_Query(array('post_type' => 'others_say') ); ?>
                         <?php if ($the_query->have_posts() ) : ?>
                         <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                    <div class="box">
                        <div class="level-item">
                            <div>
                                <div class="heading">
                                    <img class="avatar" src="<?php the_field('img_icon')['url']; ?>">
                                </div>
                                <hr>
                                <div class="content">
                                    <p> <?php the_field('discription'); ?> </p>    
                                    <h3>~ <?php the_field('title_h'); ?></h3>
                                </div>
                            </div>
                        </div>
                 </div>
                 <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>    
    </section>
<!-- footer start -->
    <footer class="footer">
        <div class="container">
             <?php $the_query = new WP_Query(array('post_type' => 'footer') ); ?>
            <?php if($the_query->have_posts() ) : ?>
            <?php while($the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="icon">
                <a href="<?php the_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php the_field('twitter'); ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?php the_field('linkedin'); ?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
                   <!--  <li><a href="">home</a> <img src="<?php echo get_template_directory_uri(); ?>/assets/image/f_icon.png" alt="icon"></li>
                    <li><a href="">Contemporary Fiction </a><img src="<?php echo get_template_directory_uri(); ?>/assets/image/f_icon.png" alt="icon"></li>
                    <li><a href="">Non Fiction </a><img src="<?php echo get_template_directory_uri(); ?>/assets/image/f_icon.png" alt="icon"></li>
                    <li><a href="">Meet the Author </a><img src="<?php echo get_template_directory_uri(); ?>/assets/image/f_icon.png" alt="icon"></li>
                    <li><a href="">What Others Say </a></li> -->
                    <?php dynamic_sidebar( 'footer' ) ?>
                
            <p><?php the_field('footer_tag'); ?> </p>
        <?php endwhile; ?>
    <?php endif; ?>
        </div>
    </footer>



  
   
    
    
    <!--  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
    <script src="assets/js/main.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>









    
  


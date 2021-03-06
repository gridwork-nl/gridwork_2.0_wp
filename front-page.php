<?php get_header(); ?>

<?php while(have_posts()){
 the_post(); ?>

<!-- main section -->
<section id="main" class="main-section">
    <div class="wrap-container">
      <div class="contact-wrap">
        <div class="cube">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
         <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
        </div>
        <div class="box-behind">
          <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall-w.svg" alt="" id="cube-w">
        </div>
       </div>
    </div>
     
     <div class="services-text">
       <p class="top-services">WEBDESIGN, DEVELOPMENT & MARKETING</p>
      <p class="bottom-services">HELPING YOU ACHIEVE THE BEST ONLINE RESULTS</p>
     </div>
     <div class="center-text-w-bar link-container">
      <a href="<?php echo site_url('/projects');?>" class="text-down">VIEW PROJECTS</a>
      <div class="center-bar"></div>
      <a href="<?php echo site_url('/blog');?>" class="text-up">LATEST NEWS</a>
     </div>
     <div class="menu-big">
      <a href="#work" id="work-link">
       <h2>WORK</h2>
       <p>(001)</p>
       <div class="block-bar-container" id="work-bar">
        <div class="inner-bar"></div>
       </div>
       <div class="under-bar" id="work-under">
        <div class="under-inner" id="work-inner"></div>
       </div>
      </a>
      <a href="#about" id="about-link">
       <h2>ABOUT</h2>
       <p>(002)</p>
       <div class="block-bar-container" id="about-bar">
        <div class="inner-bar"></div>
       </div>
       <div class="under-bar" id="about-under">
        <div class="under-inner" id="about-inner"></div>
       </div>
      </a>
      <a href="#blog" id="blog-link">
       <h2>BLOG</h2>
       <p>(003)</p>
       <div class="block-bar-container" id="blog-bar">
        <div class="inner-bar"></div>
       </div>
       <div class="under-bar" id="blog-under">
        <div class="under-inner" id="blog-inner"></div>
       </div>
      </a>
      <a href="#contact" id="contact-link">
       <h2>CONTACT</h2>
       <p>(004)</p>
       <div class="block-bar-container" id="contact-bar">
        <div class="inner-bar"></div>
       </div>
       <div class="under-bar" id="contact-under">
        <div class="under-inner" id="contact-inner"></div>
       </div>
      </a>
     </div>
   </section>
    <section id="work" class="main-section anchor">
      <!-- section title -->
     <div class="section-title" id="work-title">
      <div class="title-main">
        <h2>WORK</h2>
      <div class="title-bar" id="work-title-bar"></div>
      </div>
      <div class="number" id="work-number">
        <p>001</p>
        <div class="number-bar"></div>
      </div>
     </div>
    <!-- end of section title -->
    <div class="section-center" id="work-center">
        <?php
        $homepageProjects = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'project'
        ));
        
        while($homepageProjects->have_posts()) {
          $homepageProjects->the_post(); ?>
        <!-- single project -->
        <a href="<?php the_permalink(); ?>" class="work-item" data-aos="fade-up" id="work-item">
        <div class="left-item">
          <?php the_post_thumbnail('large',  ['class' => 'work-img']); ?>
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2><?php the_title(); ?></h2>
            <p><?php the_field( 'subtitle' ) ?></p>
          </div>
            <div class="work-text"><?php the_excerpt(); ?><span>&nbsp;...&nbsp;<p>read more</p></div>
        </div>
      </a>
        <!-- end of single project -->
        <?php }
        ?>
    </div>
    <!-- view all btn -->
    <div class="gen-flex-container">
      <a href="<?php echo site_url('/projects');?>" class="blog-btn">
        <div class="inner-btn"></div>
        <p class="btn-text">VIEW ALL</p>
      </a>
    </div>
    <!-- end of view all btn -->
    </section>
    <!-- end of main section -->
    <!-- about section -->
    <section id="about" class="main-section anchor">
      <div class="section-title" id="about-title">
        <div class="title-main">
          <h2>ABOUT</h2>
        <div class="title-bar" id="about-title-bar"></div>
        </div>
        <div class="number" id="about-number">
          <p>002</p>
          <div class="number-bar"></div>
        </div>
       </div>
      <div class="gen-flex-container" id=about-flex-container>
        <div class="left-flex about-flex" data-aos="fade-right" id="about-left">
          <img clas="work-img" src="<?php echo get_template_directory_uri(); ?>/img/jp-turkey.jpg" alt="privaet">
        <div class="about-img-bcg"></div>
        </div>
        <div class="right-flex about-flex" data-aos="fade-left" data-aos-delay="300">
           <div class="text-container">
             <p>Gridwork Design & Marketing was founded in 2019 by Jasja Prick. The aim of the company is to provide an all-in-one solution for small businesses when it comes to their online presence. Our mission is to take the client's vision of their company and bring it to life in the online environment. Our two main focal points are design; which includes branding, webdesign, webdevelopment and print design, and marketing, which includes SEO optimization, content writing, ad campaigns and social media management. Are you looking to build your online presence? <a href="#contact">Contact</a> us now!</p>
           </div>
        </div>
      </div>
    </section>
    <section id="blog" class="anchor">
       <!-- section title -->
     <div class="section-title" id="blog-title">
      <div class="title-main">
        <h2>BLOG</h2>
      <div class="title-bar" id="blog-title-bar"></div>
      </div>
      <div class="number" id="work-number">
        <p>003</p>
        <div class="number-bar"></div>
      </div>
     </div>
    <!-- end of section title -->
    <div class="gen-flex-container section-center blog-container">
    <?php
        $homepageBlog = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'post'
        ));
        
        while($homepageBlog->have_posts()) {
          $homepageBlog->the_post(); ?>
          <!-- single article -->
          <a href="<? the_permalink()?>" class="blog-article" data-aos="fade-up">
              <?php the_post_thumbnail('large'); ?>
              <div class="blog-img-bcg"></div>
            <div class="blog-text">
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?><span>&nbsp;...&nbsp;<p>read more</p>
            </div>
          </a>
          <!-- end of single article -->
        <?php }
        ?>
         <!-- view all btn -->
      </div>
      <div id="blog-anchor"></div>
      <div class="gen-flex-container" id="blog-btn-container">
        <a href="<?php echo site_url('/blog');?>" class="blog-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">VIEW ALL</p>
        </a>
      </div>
      <!-- end of view all btn -->
    </section>
        <!-- end of about section -->
        <!-- contact section -->
    <section id="contact" class="anchor">
       <!-- section title -->
     <div class="section-title" id="contact-title">
      <div class="title-main">
        <h2>CONTACT</h2>
      <div class="title-bar" id="contact-title-bar"></div>
      </div>
      <div class="number" id="contact-number">
        <p>004</p>
        <div class="number-bar"></div>
      </div>
     </div>
    <!-- end of section title -->
    <div class="gen-flex-container section-center section-padding" id="contact-flex">
      <div class="left-flex" id=contact-left>
        <p><strong>Want to get in touch? Leave a message!</strong></p>
        <?php echo do_shortcode( '[contact-form-7 id="62" title="main-contact-form"]' ); ?>
      </div>
      <div class="right-flex" id="contact-right">
        <div class="contact-wrap">
          <div class="cube" id="contact-cube">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
           <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall.svg" alt="">
          </div>
         </div>
         <div class="box-behind">
          <img src="<?php echo get_template_directory_uri(); ?>/img/box-wall-w.svg" alt="" id="cube-w">
        </div>
        
      </div>
    </div>
    </section> 
    <!-- end of contact section -->

    <?php
} ?>

<?php get_footer('homepage'); ?>
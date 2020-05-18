<?php get_header(); ?>

<section id="work" class="main-section">
      <!-- section title -->
     <div class="section-title" id="project-title">
      <div class="title-main">
        <h2>WORK</h2>
      <div class="title-bar" id="project-title-bar"></div>
      </div>
      <div class="number" id="work-number">
        <p>001</p>
        <div class="number-bar"></div>
      </div>
     </div>
    <!-- end of section title -->
    <div class="section-center" id="project-center">
    <?php if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>    
    
        <!-- single project -->
        <a href="<?php the_permalink(); ?>" class="work-item" id="project-item">
        <div class="left-item">
          <?php the_post_thumbnail('large',  ['class' => 'work-img']); ?>
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2><?php the_title(); ?></h2>
            <p>WEBDESIGN & WEBDEVELOPMENT</p>
          </div>
           
        </div>
      </a>
        <!-- end of single project -->
    <?php   endwhile; 
        endif; ?>
    </div>
    <!-- view all btn -->
    <div class="gen-flex-container">
      <a href="<?php echo site_url('');?>" class="blog-btn">
        <div class="inner-btn"></div>
        <p class="btn-text">HOMEPAGE</p>
      </a>
    </div>
    <!-- end of view all btn -->
    </section>
    <!-- end of main section -->


<?php get_footer(); ?>
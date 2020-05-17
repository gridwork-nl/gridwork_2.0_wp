<?php get_header(); ?>

 <?php while(have_posts()){
 the_post(); ?>

<?php $url = get_the_post_thumbnail_url(); ?>

<div id="project-hero" style="background: url('<?php echo $url ?>'); background-repeat: no-repeat; background-size: cover; background-position: center; background-attachment: fixed;">
</div>
<section id="project-main">
<div class="project-bar-down"></div>
<div class="project-title">
<h2><?php the_title(); ?></h2>
<p>WEBDESIGN & WEBDEVELOPMENT</p>
</div>
<div class="project-btn-container">
<!-- webpage btn -->
<div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo site_url('/blog');?>" class="project-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">GO TO WEBPAGE</p>
        </a>
      </div>
 <!-- end of webpage btn -->
<!-- github btn -->
<div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo site_url('/blog');?>" class="project-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">GITHUB</p>
        </a>
      </div>
 <!-- end of github btn --></div>
 <div class="project-text">
 <?php the_content(); ?>
 </div>
</section>
<section id="technologies">
<div class="project-bar-down"></div>
  <div class="project-flex-container">
   <div class="technology-item">
    <div class="technology-main">

    </div>
    <div class="technology-focus">
    
    </div>
   </div>
  </div>
</section>




 <?php
} 
?>

<?php get_footer(); ?>
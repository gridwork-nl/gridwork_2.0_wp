<?php get_header('blog'); ?>

 <?php while(have_posts()){
 the_post(); ?>

<?php $url = get_the_post_thumbnail_url(); ?>

<div id="project-hero" data-parallax="scroll" data-image-src="<?php echo $url ?>">
</div>
<section id="project-main">
<div class="project-bar-down"></div>
<div class="project-title">
<h2><?php the_title(); ?></h2>
<p><?php the_field('subtitle') ?></p>
</div>
<div class="project-btn-container">
<!-- webpage btn -->
<?php
$webLink = get_field('webpage_link');
if( $webLink ): ?>
<div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo esc_url( $webLink ); ?>" target="_blank" rel="noreferrer noopener" class="project-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">GO TO WEBPAGE</p>
        </a>
      </div>
<?php endif; ?>
 <!-- end of webpage btn -->
<!-- github btn -->
<?php 
$gitLink = get_field('github_link');
if( $gitLink): ?>
<div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo esc_url( $gitLink );?>" target="_blank" rel="noreferrer noopener" class="project-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">GITHUB</p>
        </a>
      </div>
<?php endif; ?>
 <!-- end of github btn --></div>
 <div class="project-text">
 <?php the_content(); ?>
 </div>
</section>
<section id="technologies">
<div class="project-bar-down"></div>
<h3>TECHNOLOGIES USED</h3>
<div class="project-flex-container">
<?php if( have_rows('technology_item') ): ?>
   
    <?php while( have_rows('technology_item') ): the_row();
    //vars
    $image = get_sub_field('technology_image');
    $title = get_sub_field('technology_title');
    $focus = get_sub_field('technology_focus');
    ?>
    <div class="technology-item">
    <div class="technology-img">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
      </div>
    <div class="technology-main">
       <div class="technology-title">
        <p><?php echo $title; ?></p>
        </div>
      <div class="technology-focus">
      <p><?php echo $focus; ?></p>
      </div>
    </div>
    </div>
    <?php endwhile; ?>
   
    <?php endif; ?>
  </div>
</section>




 <?php
} 
?>

<?php get_footer(); ?>
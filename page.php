<?php get_header('blog'); ?>

<?php while(have_posts()){
 the_post(); ?>

<section id="page" style="padding: 50px; margin: auto;">
 <h3><?php the_title(); ?></h3>
 <p><?php the_content(); ?></p>
</section>
<!-- back home btn -->
<div class="gen-flex-container">
      <a href="<?php echo site_url('');?>" class="blog-btn">
        <div class="inner-btn"></div>
        <p class="btn-text">HOMEPAGE</p>
      </a>
    </div>
    <!-- end of back home btn -->


<?php
} ?>

<?php get_footer(); ?>
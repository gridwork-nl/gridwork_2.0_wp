<?php get_header('blog'); ?>

<section id="blog-page">
<div class="blog-container">
 <div class="left-blog">
 <?php while(have_posts()){
 the_post(); ?>
<div class="single-post">
<h1 class="post-title"><?php the_title(); ?></h1>
<div class="time-meta"><p>Geplaatst op <?php the_time('j F Y'); ?> in <?php echo get_the_category_list('en'); ?></p></div>
<div class="post-img">
<?php the_post_thumbnail('large'); ?>
</div>
<?php the_content(); ?>
</div>

 <?php
} 
?>
 </div>
 <div class="right-blog">
 <div class="cat-list">
 <div class="min-list">
   <h2 class="blog-links-title">Recently Added</h2>
   <?php 
   $recentlyAdded = new WP_Query(array(
    'posts_per_page' => 3
   ));

   while ($recentlyAdded->have_posts()) {
    $recentlyAdded->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
   
   <?php
   }
   ?>
  </div>
  <div class="min-list">
   <h2 class="blog-links-title">Categories</h2>
   <?php echo get_the_category_list( $separator = '', $parents = '', $post_id = false); ?>
  </div>
  <div class="min-list">
   <h2 class="blog-links-title">Archive</h2>
   <?php while($recentlyAdded->have_posts()){
    $recentlyAdded->the_post(); ?>
      <li><a href="<?php echo site_url('/');the_time('Y/m'); ?>"><p><?php the_time('F Y'); ?></p></a></li>
    <?php 
   } ?>
  </div>
 </div>
  <div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo site_url('/blog');?>" class="blog-btn" id="blog-page-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">HOMEPAGE</p>
        </a>
      </div>
 </div>
</div>
</section>


<?php get_footer(); ?>
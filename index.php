<?php get_header(); ?>

<section id="blog-page">
<!-- section title -->
<div class="section-title" id="blog-title">
  <div class="title-main">
    <h2>BLOG</h2>
  <div class="title-bar" id="blog-title-bar"></div>
  </div>
 </div>
    <!-- end of section title -->
<div class="blog-container">
 <div class="left-blog">
 <?php while(have_posts()){
 the_post(); ?>
<div class="post-item">
<div class="left-post">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
</div>
<div class="right-post">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="time-meta"><p>Placed on <?php the_time('j F Y'); ?> in <?php echo get_the_category_list(' and '); ?></p></div>
<div class="post-excerpt">
<?php the_excerpt(); ?><span>&nbsp;...<a href="<?php the_permalink(); ?>">read more</a></span>
</div>
</div>
</div>
<?php
} ?>
<div class="pagination">
 <?php echo paginate_links(); ?>
</div>
 </div>
 <div class="right-blog">
 <div class="min-list">
   <h3 class="blog-links-title">Recently Added</h3>
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
   <h3 class="blog-links-title">Categories</h3>
   <?php echo get_the_category_list( $separator = '', $parents = '', $post_id = false); ?>
  </div>
  <div class="min-list">
   <h3 class="blog-links-title">Archive</h3>
   <?php while($recentlyAdded->have_posts()){
    $recentlyAdded->the_post(); ?>
      <li><a href="<?php echo site_url('/');the_time('Y/m'); ?>"><p><?php the_time('F Y'); ?></p></a></li>
    <?php 
   } ?>
  </div>
 </div>
</div>
</section>


<?php get_footer(); ?>
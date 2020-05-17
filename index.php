<?php get_header('blog'); ?>

<section id="blog-page">
<div class="blog-container">
    <!-- section title -->
    <div class="section-title" id="blog-page-title">
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
 <div class="left-blog">
 <?php while(have_posts()){
 the_post(); ?>
<div class="post-item">
<div class="left-post">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
<div class="blog-img-bcg" id="blog-page-bcg"></div>
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
   <div class="blog-right-title">
     <h1>Blog</h1>
     <div class="blog-right-bar"></div>
   </div>
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
 <!-- back home btn -->
      <div class="gen-flex-container" id="back-home-flex">
        <a href="<?php echo site_url('/blog');?>" class="blog-btn" id="blog-page-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">HOMEPAGE</p>
        </a>
      </div>
 <!-- end of back home btn -->
 </div>
</div>
</section>


<?php get_footer(); ?>
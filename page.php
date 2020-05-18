<?php get_header(); ?>

<?php while(have_posts()){
 the_post(); ?>

<section id="page">
 <h3><?php the_title(); ?></h3>
 <p><?php the_content ?></p>
</section>


<?php
} ?>

<?php get_footer(); ?>
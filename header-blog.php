<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gridwork Design & Marketing</title>
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-102443387-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-102443387-2');
</script>
  </head>
  <body>
    <nav id="blog-nav">
      <div class="mobile-overlay">
        <a href="<?php echo site_url('');?>" class="mobile-link">
            <h2>HOME</h2>
            <p>(000)</p>
          </a>
        <a href="#work" class="mobile-link">
            <h2>WORK</h2>
            <p>(001)</p>
          </a>
        <a href="#about" class="mobile-link">
          <h2>ABOUT</h2>
          <p>(002)</p>
          </a>
        <a href="#blog" class="mobile-link">
          <h2>BLOG</h2>
          <p>(003)</p>
          </a>
        <a href="#contact" class="mobile-link">
          <h2>CONTACT</h2>
          <p>(004)</p>
          </a>
      </div>
      <a href="<?php echo site_url('');?>" class="main-logo" id="blog-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/gridwork-black.svg" alt="gridwork-logo" />
      </a>
      <div class="social-bar link-container">
        <a href="https://www.facebook.com/gridworknl/" target="_blank">FACEBOOK</a>
        <a href="https://www.instagram.com/gridwork_nl/" target="_blank">INSTAGRAM</a>
        <a href="https://www.linkedin.com/company/gridwork-design-marketing/" target="_blank">LINKEDIN</a>
      </div>
      <div class="social-btn">
        <p>FOLLOW US</p>
      </div>
      <div class="mobile-btn" id="blog-btn">
        <div class="bar1 main-bar"></div>
        <div class="bar2 main-bar"></div>
        <div class="bar3 main-bar"></div>
      </div>
      <div class="nav-behind" id="blog-behind"></div>
    </nav>
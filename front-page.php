<?php get_header(); ?>

<?php while(have_posts()){
 the_post(); ?>

<!-- main section -->
<section id="main" class="main-section">
    <div class="wrap-container">
      <div class="wrap">
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
      <a href="#work" class="text-down">VIEW PROJECTS</a>
      <div class="center-bar"></div>
      <a href="#contact" class="text-up">GET IN TOUCH</a>
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
    <section id="work" class="main-section">
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
      <a href="#" class="work-item" data-aos="fade-up">
        <div class="left-item">
          <img clas="work-img" src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="privaet">
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2>PRIVAET FINANCIEEL MAATWERK</h2>
            <p>WEBDESIGN & WEBDEVELOPMENT</p>
          </div>
            <p class="work-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, minus mollitia. Et soluta nobis atque! Error recusandae eum dolore voluptatum ut eligendi alias tempora quas iure asperiores, iusto, ducimus fugiat?</p>

        </div>
      </a>
      <a href="#" class="work-item" data-aos="fade-up">
        <div class="left-item">
          <img clas="work-img" src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="privaet">
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2>PRIVAET FINANCIEEL MAATWERK</h2>
            <p>WEBDESIGN & WEBDEVELOPMENT</p>
          </div>
            <p class="work-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, minus mollitia. Et soluta nobis atque! Error recusandae eum dolore voluptatum ut eligendi alias tempora quas iure asperiores, iusto, ducimus fugiat?</p>

        </div>
      </a>
      <a href="#" class="work-item" data-aos="fade-up">
        <div class="left-item">
          <img clas="work-img" src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="privaet">
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2>PRIVAET FINANCIEEL MAATWERK</h2>
            <p>WEBDESIGN & WEBDEVELOPMENT</p>
          </div>
            <p class="work-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, minus mollitia. Et soluta nobis atque! Error recusandae eum dolore voluptatum ut eligendi alias tempora quas iure asperiores, iusto, ducimus fugiat?</p>

        </div>
      </a>
      <a href="#" class="work-item" data-aos="fade-up">
        <div class="left-item">
          <img clas="work-img" src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="privaet">
        <div class="img-bcg"></div>
        </div>
        <div class="right-item">
          <div class="work-item-title">
            <h2>PRIVAET FINANCIEEL MAATWERK</h2>
            <p>WEBDESIGN & WEBDEVELOPMENT</p>
          </div>
            <p class="work-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis, minus mollitia. Et soluta nobis atque! Error recusandae eum dolore voluptatum ut eligendi alias tempora quas iure asperiores, iusto, ducimus fugiat?</p>

        </div>
      </a>
    </div>
    <!-- view all btn -->
    <div class="gen-flex-container">
      <a href="" class="blog-btn">
        <div class="inner-btn"></div>
        <p class="btn-text">VIEW ALL</p>
      </a>
    </div>
    <!-- end of view all btn -->
    </section>
    <!-- end of main section -->
    <!-- about section -->
    <section id="about" class="main-section">
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
             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat eveniet dolorum illum libero voluptatum repellendus, dicta nobis aliquid accusamus reiciendis, laudantium ex inventore blanditiis earum beatae accusantium aspernatur ipsa praesentium delectus natus facere minima consequuntur iusto. Nesciunt, facere quibusdam. Provident tenetur facilis nesciunt nostrum facere voluptatem doloribus cumque quaerat commodi odit ut suscipit maxime, fuga porro aperiam quos mollitia incidunt possimus saepe accusantium delectus? Quia officia beatae veniam maiores ipsam consectetur aliquid cupiditate explicabo excepturi delectus maxime velit illum eaque, ea id voluptates ad quos placeat quas quidem. Doloremque voluptas, iste incidunt ipsa qui modi earum saepe non debitis tempora.</p>
           </div>
        </div>
      </div>
    </section>
    <section id="blog">
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
      <!-- single article -->
      <a href="" class="blog-article" data-aos="fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="">
          <div class="blog-img-bcg"></div>
         <div class="blog-text">
          <h3>Blog Article Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique, eveniet recusandae voluptatibus accusantium accusamus sint nihil delectus dolorum vitae!</p>
         </div>
      </a>
      <!-- end of single article -->
      <!-- single article -->
      <a href="" class="blog-article" data-aos="fade-down" data-aos-delay="300">
          <img src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="">
          <div class="blog-img-bcg"></div>
         <div class="blog-text">
          <h3>Blog Article Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique, eveniet recusandae voluptatibus accusantium accusamus sint nihil delectus dolorum vitae!</p>
         </div>
      </a>
      <!-- end of single article -->
      <!-- single article -->
      <a href="" class="blog-article" data-aos="fade-up"data-aos-delay="600">
          <img src="<?php echo get_template_directory_uri(); ?>/img/privaet.JPG" alt="">
          <div class="blog-img-bcg"></div>
         <div class="blog-text">
          <h3>Blog Article Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique, eveniet recusandae voluptatibus accusantium accusamus sint nihil delectus dolorum vitae!</p>
         </div>
        </a>
        <!-- end of single article -->
         <!-- view all btn -->
      </div>
      <div id="blog-anchor"></div>
      <div class="gen-flex-container" id="blog-btn-container">
        <a href="" class="blog-btn">
          <div class="inner-btn"></div>
          <p class="btn-text">VIEW ALL</p>
        </a>
      </div>
      <!-- end of view all btn -->
    </section>
        <!-- end of about section -->
        <!-- contact section -->
    <section id="contact">
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
        <p>Want to get in touch? Leave a message!</p>
        <form action="
        " width="100px">
        <label for="">Name</label>
        <input type="text">
        <label for="">Phone</label>
        <input type="text">
        <label for="">Email</label>
        <input type="text">
        <label for="">Message</label>
        <input type="textarea">
      </form>
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
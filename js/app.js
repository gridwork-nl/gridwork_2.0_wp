// pre-loader
$(document).ready(function () {
  $(".pre-loader").delay(1500).fadeOut("slow");  
});

// logo hide one scroll
$(document).ready(function () {
//mobile btn
  //toggle btn
  $(".mobile-btn").click(function () {
   $(".mobile-btn").toggleClass("change");
   $(".mobile-overlay").toggleClass("show-menu");
   $(".mobile-link").toggleClass("fadeInUp");
   $(".main-bar").toggleClass("filter-clear")
 });

 //link click events
  $(".mobile-link").click(function () {
   $(".mobile-overlay").toggleClass("show-menu");
   $(".mobile-link").toggleClass("fadeInUp");
   $(".mobile-btn").toggleClass("change");
 });

 //show social btns on mobile screen
 $(".social-btn").click(function () {
  $(".social-bar").toggleClass("social-show");
  $(".social-btn").toggleClass("social-show");
  $(".main-logo").toggleClass("logo-push");
 });
});

  // blog img bcg height calculation
  var blogBackgroundSize = (function() {
    var div = $('.blog-img-bcg');
    var text = $('.blog-text');
    var width = div.width();
    var height = (0.6823 * width);
    var top = height*(-1);

    div.css({'height': height, 'top': top});
    text.css({'top': top, 'margin-bottom': top})

  });

$(document).ready(blogBackgroundSize);
$(window).resize(blogBackgroundSize);


// work img bcg height calculation
var workBackgroundSize = (function(){  
  var div = $('.img-bcg');
  var text = $('.right-item');
  var width = div.width();
  var height = (0.6823 * width);
  var top = height*(-1);

  div.css({'height': height, 'top': top});
  if ($(window).width() < 992){
    text.css({'top': top, 'margin-bottom': top})
  };
});

$(document).ready(workBackgroundSize);
$(window).resize(workBackgroundSize);

//change the blog color change point on mobile

var changeBlogAnchor = (function(){
  if ($(window).width() <= 992) {
   $('.blog-container').attr('id', 'blog-anchor');
  } else {
   $('.blog-container').removeAttr('id', 'blog-anchor');
  }
});

$(document).ready(changeBlogAnchor);
$(window).resize(changeBlogAnchor);


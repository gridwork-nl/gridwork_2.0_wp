// change color of menu and global btn
$.fn.isOnScreen = function(){

 var win = $(window);

 var viewport = {
     top : win.scrollTop(),
     left : win.scrollLeft()
 };
 viewport.right = viewport.left + win.width();
 viewport.bottom = viewport.top + win.height();

 var bounds = this.offset();
 bounds.right = bounds.left + this.outerWidth();
 bounds.bottom = bounds.top + this.outerHeight();

 return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
};

// color change on section in screen
$(document).ready(function(){

 // work section color change
 $(window).scroll(function(){
     if ($('#work').isOnScreen()) {
       $(".main-bar").addClass("work-filter");
     } else {
       $(".main-bar").removeClass("work-filter");
     }
 });

   // about section color change
 $(window).scroll(function(){
     if ($('#about').isOnScreen()) {
       $(".main-bar").addClass("about-filter");
     } else {
       $(".main-bar").removeClass("about-filter");
     }
 });

   // blog section color change
 $(window).scroll(function(){
     if ($('#blog-anchor').isOnScreen()) {
       $(".main-bar").addClass("blog-filter");
     } else {
       $(".main-bar").removeClass("blog-filter");
     }
 });

 //contact section color change
 $(window).scroll(function(){
     if ($('#contact').isOnScreen()) {
       $(".main-bar").addClass("contact-filter");
     } else {
       $(".main-bar").removeClass("contact-filter");
     }
 });
});
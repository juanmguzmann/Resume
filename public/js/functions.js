$(function(){

  $('a[href*=#]').click(function() {
  
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
   && location.hostname == this.hostname) {
  
       var $target = $(this.hash);
  
       $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
  
       if ($target.length) {
  
           var targetOffset = $target.offset().top;
  
           $('html,body').animate({scrollTop: targetOffset}, 1000);
  
           return false;
  
      }
  
  }
  
  });
  
  });
function cambioHeader(){
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
      header = document.getElementById("header");
      header.className="header1" }
      else {
        header.className="header0";
      }
    if (window.innerWidth < 1200) {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        header.className="header1" }
        else {
          header.className="header0";
        }
      }
    }
    window.onscroll=function(){cambioHeader();}
    
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height();

  if(scroll >= windowHeight){
    $(".navbar").addClass("light-nav");
    $(".navbar").removeClass("transparent-nav");
    $('.img_logo').attr('src', 'img/logo_uzb_grey.svg');
  }
  else{
    $(".navbar").addClass("transparent-nav");
    $(".navbar").removeClass("light-nav");
    $('.img_logo').attr('src', 'img/logo_uzb.svg');
  }
});
$('.discover').click(function(){
  $('html, body').animate({
    scrollTop:$('.home-second').position().top
  }, 1000);
});

/*MMENU for Bootstrap*/
// $(document).ready(function() {
//    $(".navbar-collapse").mmenu({
//       wrappers: ["bootstrap4"]
//    });
// });

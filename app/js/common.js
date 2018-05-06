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
$('.play').click(function(){
  $('.player').trigger('play');
  $('.play').css('display', 'none');
  $('.pause').css('display', 'block');
});
$('.pause').click(function(){
  $('.player').trigger('pause');
  $('.play').css('display', 'block');
  $('.pause').css('display', 'none');
})

/*MMENU for Bootstrap*/
// $(document).ready(function() {
//    $(".navbar-collapse").mmenu({
//       wrappers: ["bootstrap4"]
//    });
// });

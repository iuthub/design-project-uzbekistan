$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  var windowHeight = $(window).height()-50;

  if(scroll >= windowHeight){
    $(".navbar-home").addClass("light-nav");
    $(".navbar-home").removeClass("transparent-nav");
    $('.img-logo').attr('src', 'img/logo_uzb_grey.svg');
  }
  else{
    $(".navbar-home").addClass("transparent-nav");
    $(".navbar-home").removeClass("light-nav");
    $('.img-logo').attr('src', 'img/logo_uzb.svg');
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
});

$(function() {
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
});

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    // nav:true,
    margin:10,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        960:{
            items:5
        },
        1200:{
            items:6
        }
    }
});

owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

/*MMENU for Bootstrap*/
// $(document).ready(function() {
//    $(".navbar-collapse").mmenu({
//       wrappers: ["bootstrap4"]
//    });
// });

$('body').scrollspy({
    target: '#stickyNav',
    offset: 10
  });

$(function() {
    var pull        = $('#pull');
        menu        = $('.mobilenavbar');
        menuHeight  = menu.height();
 
    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});


jQuery(function($) {

  $(window).scroll(function() {
  
    var scrollVar = $(window).scrollTop();
  
    if (scrollVar > 540) {
      $('#stickyNav').addClass('sticky');
      
    }
  
    if (scrollVar < 540) {
      $('#stickyNav').removeClass('sticky');
     
    }
  });



  $('#stickyNav ul li a[href^="#"]').on('click', function(e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 57
    }, 950, 'swing', function() {
      window.location.hash = target;
    });
  });

  });

$("#basic-tooltip").tooltip();
$(".thumbPopOver").popover();
$('#myModal').modal('hide');
 $(window).load(function() {
    $('.flexslider').flexslider();
  });
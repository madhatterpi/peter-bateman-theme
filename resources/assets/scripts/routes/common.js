import ScrollReveal from 'scrollreveal';

export default {
  init() {
    // JavaScript to be fired on all pages

//Scroll down project__buttons
$('.hamburger').on('click', function(e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('body').toggleClass("fixed-position");
  $('.main-menu').toggleClass('mobile-menu-overlay');
  $('.menu-primary-nav-container').toggleClass('mobile-menu-visible');
});

$('.project').on('hover', function() {
  $('.project-overlay').css('opacity', '1');
});

$('.menu-item').on('hover', function() {
  $(this).find('a').toggleClass('sayhi');
});


$('.project').on('hover', function() {
  $(this).children().find('.project__text').toggleClass('project__hi');
});

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 700, 'linear');
  });
});

$("div.hamburger").click(function() {
  if ( $(this).hasClass("is-active") ) {

    $(".menu-item").each(function(i) {
      $(this).delay(125 * i).queue(function(nxt) {
        $(this).css('visibility','visible').hide().fadeIn();
      nxt();
      });
    });

  } else {

    $(".menu-item").css('visibility','hidden');

  }

});

// Portfolio image resize
$(window).resize(function()  
{  
    var ratio = 3.3/4; // height / width  
    $('.project').height( $('.project').width() * ratio );  
});  
  
// When the page loads, trigger a window resize event  
// so our element gets resized by default. Saves having   
// to duplicate the same code on load too.  
$(window).load(function()  
{  
    $(window).trigger('resize');  
}); 


// Scroll Reveal
$(function()  {
  window.sr = ScrollReveal();

});

$(function()  { 

  if ( ($(window).width() > 768) && ( $ ('body').hasClass('home') ) ) {

    sr.reveal('.skills__icon', {
      duration: 800,
      scale: 0.7,
      distance: '0'
    }, 300);

    sr.reveal( ($('.project:lt(3)') ), {
      duration: 1200,
      scale: 1,

    });

    sr.reveal( ($('.project').slice(-3) ), {
      duration: 1200,
      scale: 1,
    });

    sr.reveal('.blog-section__article', {
      duration: 600,
      scale: 1,
      distance: '50px'
    }, 250);

    


  } 

});

$(function()  { 

  if ( $('body').hasClass('single-portfolio') ) {

    sr.reveal('.portfolio-reveal', {
      duration: 800,
      distance: '0',
      scale: 1,
    });

  }
});


    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

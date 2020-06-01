import ScrollReveal from 'scrollreveal';

export default {
  init() {
    // JavaScript to be fired on all pages

//Navbar
$('.hamburger').on('click', function(e) {
  e.preventDefault();
  $(this).toggleClass('is-active');
  $('body').toggleClass("fixed-position");
  $('.main-menu').toggleClass('mobile-menu-overlay');
  $('.menu-primary-nav-container').toggleClass('mobile-menu-visible');
});

$('.menu-item').on('hover', function() {
  $(this).find('a').toggleClass('sayhi');
});

// Project details show on hover 
$('.project__inner').on('hover', function() {
  $(this).find('.project__text').toggleClass('project__hi');
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

// Scroll Reveal
$(function()  {
  window.sr = ScrollReveal();

});

$(function()  { 

  if ( ($(window).width() > 768) && ( $ ('body').hasClass('home') ) ) {

    sr.reveal('.skills__icon', {
      duration: 1200,
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
      duration: 1200,
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

// blog animation
$('.blog-section__title').on('hover', function() {
  $(this).find('a').toggleClass('header--lined--say-hi');
});
    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

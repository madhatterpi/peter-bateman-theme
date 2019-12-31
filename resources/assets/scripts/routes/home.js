export default {
  init() {
    // JavaScript to be fired on the home page

    function fullscreen(){
      $('.hero').css({
          height: $(window).outerHeight(true)
      });
      $('.hero__overlay').css({
        height: $(window).outerHeight(true)
    });
  }

  fullscreen();

// Run the function in case of window resize
$(window).resize(function() {
     fullscreen();         
  });

  $('.review-slider').slick({
    dots: true,
    infinite: true,
    speed: 600,
    arrows : false,
  });


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};

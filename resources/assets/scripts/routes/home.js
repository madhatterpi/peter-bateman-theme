import 'slick-carousel';

export default {
  init() {
    // JavaScript to be fired on the home page
  $('.review-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    arrows : false,
  });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};

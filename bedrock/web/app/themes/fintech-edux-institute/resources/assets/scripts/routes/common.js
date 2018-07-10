export default {
  init() {
    // JavaScript to be fired on all pages
    $('.navbar-burger').click(function (e) { 
      e.preventDefault();
      $('.menu-responsive').fadeToggle();
      $('.navbar-burger').toggleClass('is-active');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

export default {
  init() {
    // JavaScript to be fired on all pages
    $('.navbar-burger').click(function (e) { 
      e.preventDefault();
      $('.menu-responsive').fadeToggle();
      $('.navbar-burger').toggleClass('is-active');
    });
    /////
    $('.cursos-boton').click(function (e) { 
      e.preventDefault();
      $('.cursos-boton,.taller-boton').removeClass('active');
      $(this).addClass('active');
      $('.cursos-content,.talleres-content').fadeOut();
      $('.cursos-content').fadeIn();
  });
  $('.taller-boton').click(function (e) { 
      e.preventDefault();
      $('.cursos-boton,.taller-boton').removeClass('active');
      $(this).addClass('active');
      $('.cursos-content,.talleres-content').fadeOut();
      $('.talleres-content').fadeIn();
  });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

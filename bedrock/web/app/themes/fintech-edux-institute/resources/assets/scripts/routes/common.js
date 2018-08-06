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
  $(".menu-contacto > a, .consulta-servicio, .consultar-taller, .consultar-curso").click(function(){
    $("html, body").animate({ scrollTop: $(document).height()}, 1500);
  });
  // Aqui va el script para el form del footer
/*$("#submitemail").click(function (e) {
  e.preventDefault();
  var name = $("#nombre").val();
  var email = $("#correo").val();
  var mensaje = $("#mensaje").val();
  $("#returnmessage").empty(); // To empty previous error/success message.
  // Checking for blank fields.
  if (name == '' || email == '' || mensaje == '') {
    alert("Porfavor llene todos los campos antes de enviar el mensaje");
  } else {
    // Returns successful data submission message when the entered information is stored in database.
    $.post("https://www.muituhandmade.com/extras/contact_form.php", {
      name1: name,
      email1: email,
      telefono1: telefono,
      mensaje1: mensaje,
      correo_enviar1: correo_enviar,
    }, function (data) {
      $("#returnmessage").append(data); // Append returned message to message paragraph.
      if (data == "Gracias. Estaremos en contacto muy pronto.") {
        $("#subscription-form")[0].reset(); // To reset form fields on success.
      }
    });
  }
});
$(document).ready(function(){
  $(".woocommerce-order-details__title").append("<a href='https://muituhandmade.com' class='verproductoshop factura'>Inicio</a>");
});*/
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

// Import IE polyfill for Vue
import "babel-polyfill";

// Require utils js
require('./utils');
// Require Vue
window.axios = require('axios');
window.Vue = require('vue');

require('./globals')

Vue.component('posts-loop', require('./components/posts-loop.vue'));
Vue.component('pages-loop', require('./components/pages-loop.vue'));


var imgItems = $('.slider li').length; // Numero de Slides
var imgPos = 1;

$('.slider li').hide(); // Ocultanos todos los slides
$('.slider li:first').show(); // Mostramos el primer slide

function nextSlider(){
  if( imgPos >= imgItems){imgPos = 1;} 
  else {imgPos++;}

  $('.slider li').hide(); // Ocultamos todos los slides
  $('.slider li:nth-child('+ imgPos +')').fadeIn(); // Mostramos el Slide seleccionado

}


Barba.Dispatcher.on('transitionCompleted', function(currentStatus, oldStatus, container) {

  setTimeout(() => {
    clearInterval(nextSlider());
  }, 15000);

    var app = new Vue({
        el: '#app'
    });

    wow.init();
    var sync = setInterval(() => {
        wow.sync();
    }, 2000);

    setTimeout(() => {
        clearInterval(sync);
    }, 15000);
   
  $('#que-hacemos').click(function (e) { 
    e.preventDefault();
    $('#mision, #vision, #motivacion').fadeOut();
    $('#mision').fadeIn();        
  });
  $('#porque').click(function (e) { 
    e.preventDefault();
    $('#mision, #vision, #motivacion').fadeOut();
    $('#vision').fadeIn();        
  });
  $('#motiva').click(function (e) { 
    e.preventDefault();
    $('#mision, #vision, #motivacion').fadeOut();
    $('#motivacion').fadeIn();        
  });
  $('.navbar-burger').click(function (e) { 
    e.preventDefault();
    $('.menu-responsive').fadeToggle();
    $('.navbar-burger').toggleClass('is-active');
  });
  $(".menu-item-24 > a").click(function (e) { 
    e.preventDefault();
    $('.menu-responsive').css("display", "none");
    $('html, body').animate({ scrollTop: ($("#footer-enviar").offset().top) -100 }, 1500); 
  });

  //efecto esconder servicios
    
  $('#empresarial').click(function (e) { 
    e.preventDefault();
    $(this).addClass("active-amarillo");
    $(".boton-gris").removeClass("active-gris");
    $('#contenedor-personal, #contenedor-empresarial').fadeOut();
    $('#contenedor-empresarial').fadeIn();        
  });
  $('#personal').click(function (e) { 
    e.preventDefault();
    $(".boton-amarillo").removeClass("active-amarillo");
    $(this).addClass("active-gris");
    $('#contenedor-personal, #contenedor-empresarial').fadeOut();
    $('#contenedor-personal').fadeIn();        
  });

    var loop = setInterval(function(){
      nextSlider();
    }, 3000);



});

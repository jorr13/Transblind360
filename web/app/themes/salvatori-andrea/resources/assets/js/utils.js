
// Use this file to require and init additional javascript, e.g require('jquery')
import {WOW} from 'wowjs';
import Barba from 'barba.js';
import $ from 'jquery';
import jQuery from 'jquery';
window.$ = $;
window.jQuery = jQuery;
window.Barba = Barba;

  //Set up Element animations on Scroll
    window.wow = new WOW(
    {
    boxClass:     'animate',      // default
    animateClass: 'animated', // default
    offset:       100,          // default
    mobile:       true,       // default
    live:         true        // default
}
)
  //Set up transition
$('document').ready(function(){
    var transEffect = 
    Barba.BaseTransition.extend({
        start: function(){
          this.newContainerLoading.then(val => this.fadeInNewcontent($(this.newContainer)));
        },
        fadeInNewcontent: function(nc) {
          nc.hide();
          var _this = this;
          $(this.oldContainer).fadeOut(1000).promise().done(() => {
            $(window).scrollTop(0); // scroll to top here
            nc.css('visibility','visible');
            nc.fadeIn(1000, function(){
              _this.done();
            })
          });
        }
    });

    Barba.Pjax.getTransition = function() {
      return transEffect;
    }
    Barba.Pjax.start();
  });

$('document').ready(function(){
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

});
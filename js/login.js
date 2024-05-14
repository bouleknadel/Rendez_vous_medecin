$(document).ready(function() {
  $(function(){
    
    var animationLibrary = 'animate';
    
    $.easing.easeOutQuart = function (x, t, b, c, d) {
      return -c * ((t=t/d-1)*t*t*t - 1) + b;
    };
    $('[ripple]:not([disabled],.disabled)')
    .on('mousedown', function( e ){
      
      var button = $(this);
      var touch = $('<touch><touch/>');
      var size = button.outerWidth() * 1.8;
      var complete = false;
      
      $(document)
      .on('mouseup',function(){
        var a = {
          'opacity': '0'
        };
        if( complete === true ){
          size = size * 1.33;
          $.extend(a, {
            'height': size + 'px',
            'width': size + 'px',
            'margin-top': -(size)/2 + 'px',
            'margin-left': -(size)/2 + 'px'
          });
        }
          
        touch
        [animationLibrary](a, {
          duration: 500,
          complete: function(){touch.remove();},
          easing: 'swing'
        });
      });
      
      touch
      .addClass( 'touch' )
      .css({
        'position': 'absolute',
        'top': e.pageY-button.offset().top + 'px',
        'left': e.pageX-button.offset().left + 'px',
        'width': '0',
        'height': '0'
      });
      
      /* IE8 will not appendChild */
      button.get(0).appendChild(touch.get(0));
      
      touch
      [animationLibrary]({
        'height': size + 'px',
        'width': size + 'px',
        'margin-top': -(size)/2 + 'px',
        'margin-left': -(size)/2 + 'px'
      }, {
        queue: false,
        duration: 500,
        'easing': 'easeOutQuart',
        'complete': function(){
          complete = true
        }
      });
    });
  });
  
  var username = $('#username'), 
      password = $('#password'), 
      erroru = $('erroru'), 
      errorp = $('errorp'), 
      submit = $('#submit'),
      udiv = $('#u'),
      pdiv = $('#p');

  // Fonction pour vérifier si une chaîne est un email valide
  function isValidEmail(email) {
      // Expression régulière pour vérifier le format d'une adresse email
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
  }

  username.blur(function() {
    if (username.val() == '') {
      udiv.attr('errr','');
    } else if (!isValidEmail(username.val())) {
      // Vérifie si le champ username n'est pas vide et ne respecte pas le format email
      udiv.attr('errr','Le format de l\'adresse email est incorrect');
    } else {
      udiv.removeAttr('errr');
    }
  });
  
  password.blur(function() {
  if(password.val() == '') {
      pdiv.attr('errr','');
    } else {
      pdiv.removeAttr('errr');
    }
  });
  
  submit.on('click', function(event) {
    if (!isValidEmail(username.val())) {
      // Empêche l'envoi du formulaire si l'email n'est pas valide
      event.preventDefault();
      udiv.attr('errr','Le format de l\'adresse email est incorrect');
    }
  });
});

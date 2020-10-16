// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function () {};
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.
document.addEventListener('DOMContentLoaded', ()=> {
              $('.item-invitados:nth-child(1) h3').animateNumber({ number: 6}, 3000);
              $('.item-invitados:nth-child(2) h3').animateNumber({ number: 15}, 3000);
              $('.item-invitados:nth-child(3) h3').animateNumber({ number: 3}, 3000);
              $('.item-invitados:nth-child(4) h3').animateNumber({ number: 9}, 3000);
  // contador
  $('.contador').countdown('2020/10/31 23:59:59', function(event){
    $('#dias').html(event.strftime('%D'));
    $('#horas').html(event.strftime('%H'));
    $('#minutos').html(event.strftime('%M'));
    $('#segundos').html(event.strftime('%S'));
  });

});

  //Colorbox
  if (screen.width > 1000){
    $('.invitado-info').colorbox({inline:true, width:"50%"});
  }
  if (screen.width < 1000){
    $('.invitado-info').colorbox({inline:true, width:"90%"});
  }
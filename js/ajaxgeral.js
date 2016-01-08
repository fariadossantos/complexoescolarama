$(function(){
  var escreva = $('#subscreva');

  $("html").niceScroll({
    scrollspeed: 50,
    autohidemode : false,
    cursorwidth : 8,
    cursorborderradius: 8,
    cursorborder : "0",
    background : "rgba(48, 48, 48, .4)",
    cursorcolor : '#1f1f1f',
    zindex : 999
  });
  
  $(".slider").owlCarousel({
    items : 1,
    navigation : true,
    pagination : false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem: true,
    responsive: true,
    autoPlay : true,
    transitionStyle : "fade"
  });
  $.ajaxSetup({
    url: 'model/model.php',
    type: 'POST',
  })

  var slider = $('.slider');
  escreva.click(function(){
    slider.slideUp('slow');
    $.ajax({
      data          : "acao=inscricao",
      beforeSend    : '',
      error         : '',
      success       : function (valores){
        slider.append(valores).delay(300).fadeIn('slow');

      }
    });

  });

})

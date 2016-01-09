$(function(){
  var escreva = $('#subscreva');
  editar = $(".editar");

  subscreva.click(function(){
    editar.delay(1000).fadeIn(100);
  })

  $(".voltarTopo").hide();

    $(function () {
    $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
    $('.voltarTopo').fadeIn();
    } else {
    $('.voltarTopo').fadeOut();
    }
    });
    $('.voltarTopo').click(function() {
    $('body,html').animate({scrollTop:0},600);
    });
    });

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

  $(".editar form").niceScroll({
    scrollspeed: 50,
    autohidemode : false,
    cursorwidth : 8,
    cursorborderradius: 8,
    cursorborder : "0",
    background : "rgba(48, 48, 48, .4)",
    cursorcolor : '#1f1f1f',
    zindex : 999
  });

/*  $(".slider").owlCarousel({
    items : 1,
    navigation : true,
    pagination : false,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem: true,
    responsive: true,
    autoPlay : true,
    transitionStyle : "fade"
  });*/
  $.ajaxSetup({
    url: 'model/model.php',
    type: 'POST',
  })

  /*var slider = $('.slider');
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

  });*/

})

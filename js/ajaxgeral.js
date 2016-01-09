$(function(){
  var escreva = $('#subscreva');
  var fecharmodal = $('.j_buttom_close');
  var inscricaomodal = $('.editar');

  fecharmodal.click(function(){
    inscricaomodal.fadeOut('slow');
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

  var slider = $('.slider');
  escreva.click(function(){
    slider.slideUp('slow');
    $.ajax({
      data          : "acao=inscricao",
      beforeSend    : '',
      error         : '',
      success       : function (valores){
        $('.editar').fadeIn('slow');

      }
    });

  });

})

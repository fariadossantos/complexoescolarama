$(function(){
  var escreva = $('#subscreva');
  var fecharmodal = $('.j_buttom_close');
  var inscricaomodal = $('.editar');
  var formulario = $('form');
  var submitload = $('.submitload');


  formulario.submit(function(){
    return false;
  })

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
  function carregando(){
    submitload.empty().html('<img src="img/load.gif" width="20" style="margin:8px 0 0 10px;" class="j_loadboxedit" />Enviando...').fadeIn('slow');
  }

  $.ajaxSetup({
    url: 'model/model.php',
    type: 'POST',
    beforeSend: carregando
  })

  var fazerinscricao = $('.forminscricao');

  fazerinscricao.submit(function(){
    var acao = "&acao=fazerinscricao";
    var dados = $(this).serialize();
    var enviar = dados+acao;
    $.ajax({
      data: enviar,
      success:function(resposta){
        $('.header').empty().html(resposta);
      }
    })
  })



})

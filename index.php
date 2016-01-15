<?php
require_once('util/conexao.php');
require_once('model/funcoes.php');

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Complexo Escolar AMA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<link rel="shortcut icon"  href=img/favicon.ico sizes="16x16" type="image/x-icon">
		<!-- Start of complexoescolarama Zendesk Widget script -->
		<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("//assets.zendesk.com/embeddable_framework/main.js","complexoescolarama.zendesk.com");
		/*]]>*/</script>
		<!-- End of complexoescolarama Zendesk Widget script -->
	</head>
	<body id="voltarTopo">

		<section class="header pull-left animated wow fadeInLeft " id="class">
			<div class="logo pull-left" id="logo"><img src="img/logo.png" alt="Logotipo" /></div>
			<p class=" animated wow fadeInLeft subscreva" data-wow-delay=".2s" id="subscreva"> <a href="index.php?a=<?php echo'inscricao';?>"><i class="fa fa-pencil"></i>Inscreva-se já</a></p>
		</section>
		<section class="slider animated wow fadeInLeft" id="slider">
			<div class="captionslider">
					<p>
						Ensino de qualidade é para toda vida, portanto inscreva o seu filho...
					</p>
					<a href="" class="botaocaption"><i class="fa fa-thumbs-up"></i> aqui..</a>
			</div>
		</section>
		<section class="missaoobjectivos animated wow fadeInLeft" data-wow-delay="0s" id="missaoobjectivos">
		<?php
			$acao = $_REQUEST['a'];
			if($acao=='inscricao'){
					require('views/inscricao.php');
			}
			else {
					require_once('views/quemsomos.php');
			}


		 ?>
		</section>
		<section class="ensino animated wow fadeInLeft" data-wow-delay=".1s" id="ensino">
			<h3>Instituição & Ensino</h3>
			<?php require("ciclefect.php"); ?>
		</section>
		<input type="button" class="voltarTopo" onclick="$('html,body').animate({scrollTop: $('#voltarTopo').offset().top}, 2000);" value="Voltar ao topo" >
		<?php require("footer.php") ?>

	</body>
</html>

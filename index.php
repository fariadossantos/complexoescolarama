<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Complexo Escolar AMA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<link rel="shortcut icon"  href=img/favicon.ico sizes="16x16" type="image/x-icon">
		<!-- Start of complexoescolarama Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","complexoescolarama.zendesk.com");/*]]>*/</script>
<!-- End of complexoescolarama Zendesk Widget script -->
		<?php require_once('util/import.php') ?>
	</head>
	<body id="voltarTopo">

		<section class="header pull-left animated wow fadeInLeft " id="class">
			<div class="logo pull-left" id="logo"><img src="img/logo.png" alt="Logotipo" /></div>
			<p class=" animated wow fadeInLeft subscreva" data-wow-delay=".2s" id="subscreva"> <a href="#subscreva"><i class="fa fa-pencil"></i>Inscreva-se já</a></p>
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
			<h3>Missão, Valores e Objectivos</h3>
			<p>
				CEA, visa à formação integral dos alunos, basenado-se nos princípios da solidariadades humana e da integridade.
				Ministrando um ensino de qualidade e promovendo a construção dos conhecimentos, de acordo com diversas etapas do desenvolvido
				da criança.
			</p>
			<p>
				O objectivo do nosso Complexo Escolar é preparar os seus alunos para uma perfeita inserção na sociedade, oferecendo-lhes
				possibilidades parao desenvolvimento de suas capacidades intelectuais, cognitivas, afectivas e inter-pessoais, bem
				como da aquisição de vivências de carácter sócio-educativas e cultural.
			</p>
		</section>
		<section class="ensino animated wow fadeInLeft" data-wow-delay=".1s" id="ensino">
			<h3>Instituição & Ensino</h3>
			<?php require("ciclefect.php"); ?>
		</section>
		<div class="editar">
	<form name="editar" action="" method="post">
		<h2>INSCREVA-SE</h2>
		<fieldset>
				<legend>DADOS PESSOAIS E ACADÉMICOS</legend>
				<label>
						<span class="campo">Nome Completo:</span>
						<input type="text" name="nome" />
				</label>

				<label>
						<span class="campo">Natural de :</span>
						<select class="" name="provincia">
							<option value="" disabled="disable" selected="selected">Seleciona a provincia</option>
							<option value="">Luanda</option>
							<option value="">Cabinda</option>
						</select><br><br>
						<input type="text" name="sobrenome" placeholder="Complemento: Bairro XXXXX e Municipio de XXXXXX" />
				</label>
				<label>
						<span class="campo">Data de Nascimento:</span>
						<input type="date" name="datadenascimento"/>
				</label>

				<label>
						<span class="campo">Residência:</span>
						<input type="text" name="residencia" placeholder="Ex: Bairro Benfica Rua nº casa nº" />
				</label>
				<label>
						<span class="campo">Contactos:</span>
						<input type="tel" name="telemovel" placeholder="Telemóvel: 923 XXX XXX" /><br><br>
						<input type="email" name="email" placeholder="E-mail: user@dominio.com" />
				</label>
				<label>
						<span class="campo">Pai:</span>
						<input type="text" name="pai" placeholder="Nome do pai" /><br><br>
						<input type="tel" name="telpai" placeholder="Telemovel do pai" />
				</label>
				<label>
						<span class="campo">Mãe:</span>
						<input type="text" name="mae"  placeholder="Nome da mãe"/> <br><br>

						<input type="tel" name="telmae" placeholder="Telemovel da mãe"/>
				</label>
				<label>
						<span class="campo">Encarregado de Educação:</span>
						<input type="text" name="mae"  placeholder="Nome do encarregado"/> <br><br>
						<input type="text" name="residenciaencarregado"  placeholder="Residência do encarregado"/> <br><br>
						<input type="tel" name="telmae" placeholder="Telemovel do encarregado"/>
				</label>
		</fieldset>
		<fieldset>
				<legend>DOCUMENTAÇÃO</legend>
				<label>
						<span class="campo">BI:</span>
						<input type="file" name="bi" />
				</label>

				<label>
						<span class="campo">Certificado:</span>
						<input type="file" name="certificadoescolar" />
				</label>

				<label>
						<span class="campo">Atestado Médico:</span>
						<input type="file" name="atestadomedico" />
				</label>

				<label>
						<span class="campo">Certificado de Vacina:</span>
						<input type="file" name="ceritifcadovacina" />
				</label>
</fieldset>
        <img src="img/load.gif" width="20" style="margin:8px 0 0 10px;" class="j_loadboxedit" />
        <input type="submit" value="Enviar" class="btnedit j_buttom_edit" />
        <input type="reset" value="Fechar" class="btnclose j_buttom_close" />
    </form>
</div>
		<input type="button" class="voltarTopo" onclick="$('html,body').animate({scrollTop: $('#voltarTopo').offset().top}, 2000);" value="Voltar ao topo" >
		<?php require("footer.php") ?>

	</body>
</html>

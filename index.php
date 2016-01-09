<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Complexo Escolar AMA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<link rel="shortcut icon"  href=img/favicon.ico sizes="16x16" type="image/x-icon">
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
						<span class="campo">Telefone:</span>
						<input type="text" name="telefone" />
				</label>

				<label>
						<span class="campo">Senha:</span>
						<input type="text" name="code" />
				</label>
	        <input type="hidden" name="id" />
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

				<label>
						<span class="campo">Senha:</span>
						<input type="text" name="code" />
				</label>
</fieldset>
        <img src="img/load.gif" width="20" style="margin:8px 0 0 10px; display:none;" class="j_loadboxedit" />
        <input type="submit" value="Enviar" class="btnedit j_buttom_edit" />
        <input type="reset" value="Fechar" class="btnclose j_buttom_close" />
    </form>
</div>
		<input type="button" class="voltarTopo" onclick="$('html,body').animate({scrollTop: $('#voltarTopo').offset().top}, 2000);" value="Voltar ao topo" >
		<?php require("footer.php") ?>

	</body>
</html>

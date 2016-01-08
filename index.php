<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Complexo Escolar AMA</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<?php require_once('util/import.php') ?>
	</head>
	<body>
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
		<?php require("footer.php") ?>

	</body>
</html>

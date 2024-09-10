<!DOCTYPE html>
<html lang="pt-br">

<?php 
session_start();
?>

<head>


	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z9R09Z9Q20"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z9R09Z9Q20');
</script>
	<title>Cifra e Letra - Letras e cifras de músicas</title>
	<meta name="description" content="Site com cifras e letras de músicas dos mais vários cantores e bandas de estilos e gêneros variados para o seu gosto musical. Venha confeir e aprender a tocar as músicas do seu cantor ou banda favoritos.">
	<meta charset="UTF-8"/>
	<meta name="classification" content="Internet">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="letras de músicas, cifras de músicas, letras, músicas, letra de música, letra, letras de música, músicas, musica, cifras, tablatura, cifra">
	<meta name="robots" content="index, follow">
	<meta property="og:image" content="https://www.cifraeletra.com.br/imagens/og-image.webp" />
	<meta property="og:title" content="Cifras e letras de músicas para você">
	<meta name="p:domain_verify" content="2de002edc7462026521b56e601c3010f"/>

	<link rel="canonical" href="https://www.cifraeletra.com.br" />
	
	<link rel="shortcut icon" href="/imagens/favicon.webp">
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/css/destaques.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/css/rodape.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/menu-sup.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="/css/store.css" media="screen" />
	
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous">
	</script>
	
	<script src="https://kit.fontawesome.com/10d6de9b48.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<style>
		#container-anuncio-base-fixo{
			display: none;
		}
	</style>
	
</head>


<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v16.0&appId=198569972604435&autoLogAppEvents=1" nonce="iGVCoBIh"></script>
	<!-- INICIO MENU SUPERIOR -------------------------------------------------------------------------------------------------->

	<?php
	$menu = file_get_contents ("https://www.cifraeletra.com.br/menu-sup.php");
	echo $menu;
    ?>

<!-- FIM MENU SUPERIOR -------------------------------------------------------------------------------------------------->


<!-- DESTAQUES =============================-->

<h1 id="titulo-destaques" class="titulo-home">Cifras que estão em destaque:</h1>

	<?php
	include("destaques.php");
	?>
	
<!-- FIM DOS DESTAQUES =============================-->


	
	<div class="esp-embaixo" id="anuncio1">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous"></script>
<!-- dbvid1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7145956446323439"
     data-ad-slot="4624449483"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
	
	
	
	<h2 class="titulo-home">Cifras mais acessadas:</h2>

	<div id="mais-acessados"class="cont-int">
		<?php include("mais-acessados/ma1.php");?>
		<?php include("mais-acessados/ma2.php");?>
		<?php include("mais-acessados/ma3.php");?>
		<?php include("mais-acessados/ma4.php");?>
		<?php include("mais-acessados/ma5.php");?>
		<?php include("mais-acessados/ma6.php");?>
		<?php include("mais-acessados/ma7.php");?>
		<?php include("mais-acessados/ma8.php");?>
		<?php include("mais-acessados/ma9.php");?>
		<?php include("mais-acessados/ma10.php");?>
		<?php include("mais-acessados/ma11.php");?>
		<?php include("mais-acessados/ma12.php");?>
	</div>

	<div id="adsterra1" class="adsterra">
			<script type="text/javascript">
				atOptions = {
					'key' : '1fdafea5643192743952eae7b452b828',
					'format' : 'iframe',
					'height' : 250,
					'width' : 300,
					'params' : {}
				};
				document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/1fdafea5643192743952eae7b452b828/invoke.js"></scr' + 'ipt>');
			</script>	
		</div>

		<div id="adsterra2" class="adsterra">
			<script type="text/javascript">
				atOptions = {
					'key' : 'a2e5b4818170b5da92fb7e20088f2a52',
					'format' : 'iframe',
					'height' : 90,
					'width' : 728,
					'params' : {}
				};
				document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.profitabledisplaynetwork.com/a2e5b4818170b5da92fb7e20088f2a52/invoke.js"></scr' + 'ipt>');
			</script>
		</div>

	<h2 class="titulo-home titulo-musica-rec">Cifras recomendadas:</h2>

	<div id="musicas-rec-content">
		<?php include("cifras-recomendadas/cifra-recomendada-1.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-2.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-3.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-4.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-5.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-6.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-7.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-8.php");?>
		<?php include("cifras-recomendadas/cifra-recomendada-9.php");?>
	
	</div>

	<div class="esp-embaixo" id="anuncio1">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7145956446323439"
     crossorigin="anonymous"></script>
<!-- dbvid1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7145956446323439"
     data-ad-slot="4624449483"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>

	<h2 class="titulo-home titulo-musica-rec">Loja do Cifra e Letra</h2>

	<?php
	$loja = file_get_contents ($_SERVER['DOCUMENT_ROOT'] .'/loja.php');
	echo $loja;
	?>



	<?php
	$ad1 = file_get_contents ($_SERVER['DOCUMENT_ROOT'] . '/ads/ad1.html');
	$ad2 = file_get_contents ($_SERVER['DOCUMENT_ROOT'] . '/ads/ad2.html');
	$ad3 = file_get_contents ($_SERVER['DOCUMENT_ROOT'] . '/ads/ad3.html');
	$ad4 = file_get_contents ($_SERVER['DOCUMENT_ROOT'] . '/ads/ad4.html');
	$num = rand(1,4);
	
	if ($num == 1):
		echo $ad1;
	elseif($num == 2):
		echo $ad2;
	elseif($num == 3):
		echo $ad3;
	else:
		echo $ad4;
	endif;
	?>

	<!-- INÍCIO DO RODAPÉ ==============================================================================-->
	<?php
	$rodape = file_get_contents ($_SERVER['DOCUMENT_ROOT'] .'/rodape.html');
	echo $rodape;
	?>

	<!-- FIM DO RODAPÉ =================================================================================-->
	<a href="#" class="btn"></a>





		
	</div>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>KAPPA 215 - Técnico em Manutenção e Suporte em Informática</title>
    
	<meta name="description" content="Turma KAPPA 215 do curso Técnico em Manutenção e Suporte em Informática de 11/07/2009 a 10/10/2010" />
    <meta name="keywords" content="Turma KAPPA 215, kappa215, informática, cepep, site demo, download, fotos" />
	
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    
    <script src="Scripts/jquery-1.3.2.min.js" type="text/javascript"></script>
    <script src="Scripts/Plugins/jcarousel/lib/jquery.jcarousel.js" type="text/javascript"></script>
    <script src="Scripts/Plugins/jcarousel/lib/jquery.jcarousel.pack.js" type="text/javascript"></script>
    <script src="Scripts/Plugins/Lightbox/js/jquery.lightbox-0.5.js" type="text/javascript"></script>

    <link href="Scripts/Plugins/jcarousel/lib/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
    <link href="Scripts/Plugins/jcarousel/skins/tango/skin.css" rel="stylesheet" type="text/css" /> 
    <link href="Scripts/Plugins/Lightbox/css/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
	
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" type="image/gif" href="Scripts/Plugins/jcarousel/images/loading.gif" />

<script type="text/javascript">
	function mycarousel_initCallback(carousel)
	{
		// Desabilita o autoscrolling se o usuario clicar no botao anterior ou proximo.
		carousel.buttonNext.bind('click', function() {
		carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    //Pausa o autoscrolling se o usuario mover o cursor sobre a imagem clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
	};

	jQuery(document).ready(function() {
    jQuery('#imgsPortifolio').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
    jQuery("#portifolio a").lightBox();
	});
 </script>
    
</head>
<body>

<div id="tudo">
	<!-- INICIO TOPO -->
    	<div id="topo"><?php include("topo.php") ?>
	</div>
	<!-- FINAL TOPO --> 

	<!-- INICIO MENU -->
    	<div id="menu"><?php include("menu.php") ?>
	</div>
	<!-- FINAL MENU -->
	
	<!-- INICIO CONTEUDO -->
    	<div id="conteudo"><?php include("conteudo.php") ?>
	</div>
	<!-- FINAL CONTEUDO -->
	
	<!-- INICIO RODAPE -->
    	<div id="rodape"><?php include("rodape.php") ?>
	</div>
	<!-- FINAL RODAPE -->
</div>
</body>
</html>
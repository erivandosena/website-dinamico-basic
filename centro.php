
	<div id="conteudo">
		<strong class="arredondadoCentroA">
			<strong class="arredondadoCentro1">&nbsp;</strong>
			<strong class="arredondadoCentro2">&nbsp;</strong>
			<strong class="arredondadoCentro3">&nbsp;</strong>
		</strong>
		<div class="arredondadoCentroB">
		<?php
		if( !empty($_GET['pg'])) {
		$pg = $_REQUEST["pg"];
		switch($pg) {
		case "faleConosco":
			include ("faleConosco.php");
		break;
		case "portifolio":
			include("portifolio.php");
		break;
		default:
			include("home.php");
		break;
		}
		}
		else
		{
		
		 	include("home.php");
		}
		?>
 		</div>
		<strong class="arredondadoCentroA">
			<strong class="arredondadoCentro3">&nbsp;</strong>
			<strong class="arredondadoCentro2">&nbsp;</strong>
			<strong class="arredondadoCentro1">&nbsp;</strong>
		</strong>
	</div>

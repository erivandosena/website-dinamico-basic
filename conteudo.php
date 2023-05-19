
		<strong class="cantosArredondadosConteudoA">
			<strong class="cantosArredondadosConteudo1">&nbsp;</strong>
			<strong class="cantosArredondadosConteudo2">&nbsp;</strong>
			<strong class="cantosArredondadosConteudo3">&nbsp;</strong>
		</strong>
		<div class="cantosArredondadosConteudoB">
			<?php
			if( !empty($_GET['pg']) ) {
				$pg = $_REQUEST["pg"];
				switch($pg) {
					case "faleConosco":
						include ("faleConosco.php");
					break;
					case "portifolio":
						include("portifolio.php");
					break;
					case "download":
						include("download.php");
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
		<strong class="cantosArredondadosConteudoA">
			<strong class="cantosArredondadosConteudo3">&nbsp;</strong>
			<strong class="cantosArredondadosConteudo2">&nbsp;</strong>
			<strong class="cantosArredondadosConteudo1">&nbsp;</strong>
		</strong>

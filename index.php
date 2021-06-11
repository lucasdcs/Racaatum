<?php
	//iniciar uma sessão
	session_start();

	//incluir o arquivo de conexao com o banco
	require "config/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<title>MeuNovoCarro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="shortcut icon" href="imagens/logomarca.png">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
	

	<script type="text/javascript" src="js/lightbox.js"></script>
	<script src="js/parsley.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/magnific-popup.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<!-- ************************************************************************************************** -->
<body>
	<header>
			<!-- COMEÇO DO HEADER -->
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-3 pt-0 pt-sm-5 text-center text-sm-left">
              <strong class="text-uppercase"><i class="fa fa-clock"></i> Horários de Atendimento</strong><br>
              <span>Das 8h às 18h de Segunda à Sexta</span><Br/>
              <span>Das 8h às 12h aos Sábados</span><Br/>
            </div>
            <div class="col-12 col-sm-6 text-center pt-0 pb-0 logomarca">
              <a href="index.php"><img class="img-fluid" src="imagens/logomarca.png" title="Oscarinho" alt="Oscarinho"/></a>
            </div>
            <div class="col-12 col-sm-3 pt-0 pt-sm-5 text-center text-sm-right">
                <strong class="text-uppercase"><i class="fa fa-phone-square"></i> Central de Atendimento</strong><br/>
                <p class="inline text-center"><i class="fab fa-whatsapp-square"></i>(44) 3622-2500</p>
                <p class="inline text-center"><i class="fab fa-whatsapp-square"></i>(44) 9 9734-0742</p>
								<p class="inline text-center"><i class="fab fa-whatsapp-square"></i>(44) 9 9704-5569</p>
			</div>
		</div>
	</div>
			
			<!-- COMEÇO DO NAV -->
				<nav class="navbar-expand-lg navbar-light">
					      <ul class="navbar-nav justify-content-center">
					          <a class="btn btn-dark btn-lg" type="button" href="index.php?pagina=faleconosco">FALE CONOSCO</button>
					          <a class="btn btn-dark btn-lg active" href="index.php"><i class="fas fa-home"></i> PAGINA INICIAL</button>
					          <a class="btn btn-dark btn-lg" href="index.php?pagina=nossoestoque">NOSSO ESTOQUE</a>
					        
					      </ul>
					    
				
		</nav>		<!-- FIM DO NAV -->
	</header>				<!-- FIM DO HEADER -->
				
		<?php
		//recebe o valor da página (GET)
		$pagina = $_GET["pagina"] ?? "home";

		//$paginas = home -> paginas/home.php
		$pagina = "paginas/{$pagina}.php";

		//verificar se a página
		if ( file_exists($pagina) ) {
			include $pagina;
		} else {
			include "paginas/erro.php";
		}
		

		?>
	</div>

			
					
						<footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Oscarinho Veiculos <?=date("Y")?></span>
                    </div>
                </div>
            </footer>
            
			
</body>
</html>
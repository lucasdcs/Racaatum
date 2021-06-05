<?php
	//iniciar uma sessão
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
	<title>MeuNovoCarro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/logomarca.png">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


	<script src="js/parsley.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
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
              <a href="index.html"><img class="img-fluid" src="imagens/logomarca.png" title="Oscarinho" alt="Oscarinho"/></a>
            </div>
            <div class="col-12 col-sm-3 pt-0 text-center text-sm-right">
                <strong class="text-uppercase"><i class="fa fa-phone-square"></i> Central de Atendimento</strong><br/>
                <p class="inline"><i class="fab fa-whatsapp-square"></i>(44) 0000-0000</p>
                <p class="inline"><i class="fab fa-whatsapp-square"></i>(44) 0000-0000</p>
				<p class="inline"><i class="fab fa-whatsapp-square"></i>(44) 0000-0000</p>
			</div>
		</div>
	</div>
			
			<!-- COMEÇO DO NAV -->
				<nav class="navbar-expand-lg navbar-light">
					      <ul class="navbar-nav justify-content-center">
					        <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home"></i>Home</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#"><i class="fas fa-id-card"></i>Contato</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link" href="#"><i class="fas fa-question"></i>Fale Conosco</a>
					        </li>
					      </ul>
					    </div>
					  </div>
  					</div>
				
		</nav>		<!-- FIM DO NAV -->
	</header>				<!-- FIM DO HEADER -->
				
				<div class="cycle-slideshow">
					<img src="imagens/banner1.jpg" alt="Banner" title="Banner">
						<img src="imagens/banner2.jpg" alt="Banner">
					<img src="imagens/banner3.jpg" alt="Banner" title="Banner">
				</div>

	<main>
	<!--
		<h1>Nossos Destaques</h1>
		<div class="carros">
			<div class="item">
				<img src="imagens/camaro.jpg" alt="Camaro" title="Camaro">
				<p>Camaro GTi 2019</p>
				<p class="valor">R$ 159.900,00</p>
				<p>
					<a href="" class="butao">
					Detalhes
					</a>
				</p>
			</div>
			<div class="item">
				<img src="imagens/delrey.jpg" alt="Del Rey" title="Del Rey">
				<p>Del Rey Ghia 1990</p>
				<p class="valor">R$ 19.900,00</p>
				<p>
					<a href="" class="butao">
						Detalhes
					</a>
				</p>
			</div>
			<div class="item">
				<img src="imagens/mustang.jpg" alt="Mustang March 1" title="Mustang March 1">
				<p>Mustang March 1</p>
				<p class="valor">R$ 99.900,00</p>
				<p>
					<a href="" class="butao">
					Detalhes
					</a>
				</p>
			</div>
			<div class="item">
				<img src="imagens/opala.jpg" alt="Opala Diplomata " title="Opala Diplomata ">
				<p>Opala Diplomata 1989</p>
				<p class="valor">R$ 24.900,00</p>
				<p>
					<a href="" class="butao">
					Detalhes
					</a>
				</p>
			</div>
		</div>
	</div>
	-->
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
	</main>

	<!-- INFOOO -->
		<div class="fundo">
  		<div class="container mt-5">
    			<div class="row text-center">
      		<div class="col-sm-4">
        		<i class="fas fa-thumbs-up icone fa-5x"></i>
        			<h4 style="color: white"><center>MELHOR NEGÓCIO</center></h4>
        		<h5 style="color: white">A melhor oferta para comprar e vender seu veículo.</h5>
      		</div>
    
      <div class="col-sm-4 icone">
        <i class="fas fa-street-view icone fa-5x"></i>
        	<h4 style="color: white"><center>CONFIANÇA</center></h4>
        <h5 style="color: white">Credibilidade conquistada com os diversos anos no mercado automotivo.</h5>
      </div>
      
      		<div class="col-sm-4">
        		<i class="fas fa-lock icone fa-5x"></i>
        			<h4 style="color: white"><center>SEGURANÇA</center></h4>
        		<h5 style="color: white">Veículos de procedência para atestar sua transparência.</h5>
      		</div>
    </div>
  </div>
</div>		<!-- FIM DO INFO -->
						
							
							<script type="text/javascript">
								function menu() {
									$("header nav ul").toggle();
								}
							</script>

					<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Oscarinho Veiculos <?=date("Y")?></span>
                    </div>
                </div>
            </footer>				
</body>
</html>
<?php
		//verificar se a variável $pagina não existe
		if ( !isset ( $pagina ) ) exit;
?>

	
	<main>
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
	</main>

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
</div>


	<?php

		//selecionar 8 produtos - rand() é por sorteio - limit é limitar o n° de resultado
		$sql = "select * from --- order by rand() limit 8";
		//executar o sql
		$result = mysqli_query($con, $sql);

		//separar os dados por linha
		while ( $dados = mysqli_fetch_array( $result ) ) {
			//separar
			$id = $dados["id"];
			
		}


<?php
		//verificar se a variável $pagina não existe
		if ( !isset ( $pagina ) ) exit;
?>
	<div class="cycle-slideshow">
					<img src="imagens/banner1.jpg" alt="Banner" title="Banner">
						<img src="imagens/banner2.jpg" alt="Banner">
					<img src="imagens/banner3.jpg" alt="Banner" title="Banner">
				</div>

	<h1>Nossos Destaques</h1>
		<div class="row w-100">
		<?php

		//selecionar 8 produtos - rand() é por sorteio - limit é limitar o n° de resultado
		$sql = "select * from veiculo order by rand() limit 8";
		//executar o sql
		$result = mysqli_query($con, $sql);

		//separar os dados por linha
		while ( $dados = mysqli_fetch_array( $result ) ) {
			//separar
			$id = $dados["id"];
			$modelo = $dados["modelo"];
			$anomodelo = $dados["anomodelo"];
			$anofabricacao = $dados["anofabricacao"];
			$valor = $dados["valor"];
			$tipo = $dados["tipo"];
			$fotoDestaque = $dados["fotoDestaque"];
			$marca_id = $dados["marca_id"];
			$cor_id = $dados["cor_id"];
			$opcionais = $dados["opcionais"];

			$valor = "R$ " . number_format($valor, 2, ",", ".");

						echo"<div class='col-12 col-md-3 text-center w-100'>
										<img src='veiculos/{$fotoDestaque}' alt='{$modelo}' class='img-thumbnail'>
										<span class='negrito'>{$modelo}</span>
										<p class='valor'>{$valor}</p>
										<p><a href='index.php?pagina=veiculos&id={$id}' class='btn btn-danger btn-lg w-100'>Detalhes</a>
										</p>
									</div>
									";
		}
		?>

	</div>

	


			<!-- INFOOO -->
		<div class="fundo">
  		<div class="container mt-5">
    			<div class="row text-center">
      		<div class="col-sm-4 icone">
        		<i class="fas fa-thumbs-up icone fa-5x"></i>
        			<h4><center>MELHOR NEGÓCIO</center></h4>
        		<h5>A melhor oferta para comprar e vender seu veículo.</h5>
      		</div>
    
      <div class="col-sm-4 icone">
        <i class="fas fa-street-view icone fa-5x"></i>
        	<h4><center>CONFIANÇA</center></h4>
        <h5>Credibilidade conquistada com os diversos anos no mercado automotivo.</h5>
      </div>
      
      		<div class="col-sm-4 icone">
        		<i class="fas fa-lock icone fa-5x"></i>
        		<h4><center>SEGURANÇA</center></h4>
        		<h5>Veículos de procedência para atestar sua transparência.</h5>
      		</div>
    </div>
  </div>
</div>		<!-- FIM DO INFO -->

		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<img class="mt-3 mb-3 img-fluid" style="max-height: 130px;" src="imagens/logomarca.png" 
					class="img-fluid" title="oscarrinho" alt="Oscarrinho Veiculos"/><br/>
					R. Des. Antônio Ferreira da Costa, 2-196 - Zona I<br/>
					87501-200 - UMUARAMA/PARANÁ<br/>
					<strong><i class="fa fa-phone"></i> (44) 3622-2500</strong><br/><br/>
</div>
</div>
			
						


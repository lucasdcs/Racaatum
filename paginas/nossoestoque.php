<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;

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

				?>
			
				<?php
						echo"<div class='carros'>
									<div class='item'>
										<img src='veiculos/{$fotoDestaque}' alt='{$modelo}'>
										<p>{$modelo}</p>
										<p class='valor'>{$valor}</p>
										<p><a href='index.php?pagina=veiculos&id={$id}' class='btn btn-danger btn-lg w-100'>Detalhes</a>
										</p>
									</div>";

									
		}
?>



		

	

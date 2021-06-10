<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;
?>
	<h1>NOSSO ESTOQUE:</h1>
	
		<?php

		$marca_id = trim ( $_GET["id"] ?? "");

		print_r( $_GET);

		$marca_id = (int)$marca_id;

		$sql = "select * from veiculo where marca_id = {$marca_id}";
		$result = mysqli_query($con, $sql);
		$dados = mysqli_fetch_array($result);



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

						echo"<div class='carros'>
									<div class='item'>
										<img src='veiculos/{$fotoDestaque}' alt='{$modelo}'>
										<p>{$modelo}</p>
										<p class='valor'>{$valor}</p>
										<p><a href='index.php?pagina=veiculos&id={$id}' class='btn btn-danger btn-lg w-100'>Detalhes</a>
										</p>
									
								</div>
									";
		}
		?>
					</div>
</div>
</div>
</div>
</div>
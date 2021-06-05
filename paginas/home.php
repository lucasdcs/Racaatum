<?php
		//verificar se a variável $pagina não existe
		if ( !isset ( $pagina ) ) exit;
?>

	<?php

		//selecionar 8 produtos - rand() é por sorteio - limit é limitar o n° de resultado
		$sql = "select * from --- order by rand() limit 8";
		//executar o sql
		$result = mysqli_query($con, $sql);

		//separar os dados por linha
		while ( $dados = mysqli_fetch_array( $result ) ) {
			//separar
			$id = $dados["id"];
			$modelo
			$anomodelo
			$anofabricacao
			$valor
			$tipo
			$fotoDestaque
			$marca_id
			$cor_id
			$usuario
			$opcionais

			$valor = "R$ " . number_format($valor, 2, ",", ".");

						echo"<div class='item'>
							<img src='imagens/{$fotoDestaque}' alt='{$modelo}'>
							<p>{$modelo}</p>
							<p class='valor'>{$valor}</p>
							<p><a href='index.php?pagina=produto&id={$id}' class='btn btn-warning btn-lg w-100'>Detalhes</a>
							</p>
						</div>";
		}
		?>



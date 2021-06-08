<?php
	//verificar se a variável $pagina não existe
	if ( !isset ( $pagina ) ) exit;



	//print_r ( $GET );

	//recuperacao do id
	//trim retira espaços em branco
	$id = trim ( $_GET["id"] ?? "");

	$id = (int)$id;

	//recuperar o veiculo com o id
	$sql = "select * from veiculo where id = {$id} limit 1";
	$result = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($result);

	//recuperar os dados do banco

	$id = $dados["id"];
	$modelo = $dados["modelo"];
	$anomodelo = $dados["anomodelo"];
	$anofabricacao = $dados["anofabricacao"];
	$valor = $dados["valor"];
	$tipo = $dados["tipo"];
	$fotoDestaque = $dados["fotoDestaque"];
	$marca_id = $dados["marca_id"];
	$cor_id = $dados["cor_id"];
	$usuario_id = $dados["usuario_id"];
	$opcionais = $dados["opcionais"];

	$valor = "R$ " . number_format($valor, 2, "," , ".");

?>
		
		<h1><?=$modelo?></h1>
		<div class="row">
			<div class="col-12 col-md-4">
				<a href="veiculos/<?=$fotoDestaque?>" data-lightbox="veiculos" title="<?=$modelo?>">
					<img src="veiculos/<?=$fotoDestaque?>" alt="<?=$modelo?>" class="w-100">
				</a>
			</div>

		<div class="col-12 col-md-8">
			
		    <p class='valor text-center'><?=$valor;?></p>

			<br><br>
			<h2 class="text-center">Descrição do Veículo:</h2>

			<?=nl2br($opcionais);?>

		</div>
	</div>
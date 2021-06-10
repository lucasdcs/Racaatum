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
	//$sql = "SELECT v.veiculo, m.marca, c.cor FROM ((veiculo v INNER JOIN marca m ON (m.id = v.marca_id) INNER JOIN cor.c ON (c.id = v.cor_id) WHERE id = v.id ";
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
	$km = $dados["km"];
	$combustivel_id = $dados["combustivel_id"];
	$cambio_id = $dados["cambio_id"];
	$opcionais = $dados["opcionais"];
	
	$sql = "SELECT v.veiculo*, m.marca, c.cor FROM veiculo v INNER JOIN marca m ON m.id = v.marca_id INNER JOIN cor.c ON c.id = v.cor_id WHERE v.id limit 1";
	$result = mysqli_query($con,$sql);
	$dados = mysqli_fetch_array($result);
	$valor = "R$ " . number_format($valor, 2, "," , ".");

?>



			<h1><?=$modelo?></h1>
		
		<div class="row">
			<div class="col-12 col-md-4">
					<a class="image-link" href="veiculos/<?=$fotoDestaque?>" title="<?=$modelo?>">
					<img src="veiculos/<?=$fotoDestaque?>" alt="<?=$modelo?>" class="w-100">
				</a>
			</div>

		<div class="col-12 col-md-8">
         <div class="text-center mb-3">
            
            <div class="alert alert-danger fs5" role="alert">
  				<?=$valor?></div>
          </div>

            <ul class="list-group">
              <li class="list-group-item">
              	<i class="fa fa-calendar simbolos"></i> 
              		Ano: <strong><?=$anofabricacao?>/<?=$anomodelo?></strong></li>
              
              <li class="list-group-item">Câmbio: <strong><?=$cambio_id?></strong></li>

              <li class="list-group-item">
              	<i class="fas fa-gas-pump simbolos"></i>
              	Combustível: <strong><?=$combustivel_id?></strong></li>
              
              <li class="list-group-item">
              	<i class="fas fa-palette simbolos"></i>
              	Cor: <strong><?=$cor_id?></strong></li>

              <li class="list-group-item">
              	<i class="fas fa-tachometer-alt simbolos"></i>
              	KM: <strong><?=$km?></strong></li>
              </ul>

           

			<br><br>
			<h2 class="text-center">Opcionais:</h2>

			<?=nl2br($opcionais);?>
				
				</div>
      		</div>
		</div>
	</div>

	
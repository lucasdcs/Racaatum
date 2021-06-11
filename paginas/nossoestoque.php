<?php
		//verificar se a variável $pagina não existe
		if ( !isset ( $pagina ) ) exit;
?>

<h1>NOSSO ESTOQUE:</h1>

		
			<div class="middle3 mt-3">
  <div class="container">
     <div class="row">
        <div class="col-md-2">
            <div id="accordion" role="tablist">
              
                

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="">

                    
            

            <div class="list-group mb-3">
              <a href="" class="list-group-item list-group-item-action active bg-dark">MARCAS</a>
                  <?php
                  	$sql = "";
                  	//executar sql
                  	$result = mysqli_query($con,$sql);
                  	//recuperar os dados por linha
                  	while ( $dados = mysqli_fetch_array( $result ) ) {
                  		//separar os resultados
                  		
                  			echo"<a href='index.php?pagina=marca&{$id}' class='list-group-item list-group-item-action'>{$marca}</a>";
                  	}
                  ?>
                                	
                          </div>

            <div class="list-group mb-3">
              <a href="" class="list-group-item list-group-item-action active bg-dark">COR</a>
              		<?php
              			while ( $dados = mysqli_fetch_array( $result ) ) {
              					echo"<a href='index.php?pagina=cor&{id}' class='list-group-item list-group-item-action'>{$marca}</a>";
              			}
                   ?>
                          </div>
                  </div>
                </div>
              </div>
        </div>

     
		<div class="col-md-10 col-xs-12">
			<div class="row w-100">
		<?php

		//selecionar 8 produtos - rand() é por sorteio - limit é limitar o n° de resultado
		$sql = "select * from veiculo order by rand()";
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
		</div>
		</div>
	</div>


	
	
			
					

		

	
	
	


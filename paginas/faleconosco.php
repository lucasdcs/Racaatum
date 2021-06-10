<?php
    //verificar se a variável $pagina não existe
    if ( !isset ( $pagina ) ) exit;
?>

<div class="content-wrap pb-0">
  <div class="container clearfix">
    <div class="row">
      <div class="col-12 col-sm-6 offset-sm-3">
         <div class="mt-3 mb-3">
            <h4>Envie um e-mail</h4>
            <span>Em breve será respondido.</span>
          </div>
          
        
                
        <form action="https://api.staticforms.xyz/submit" method="POST" name="form">
          <input type="hidden" name="accessKey" value="2aa7e174-64d4-45a1-95b2-98ceb12e7061">
          <input type="hidden" name="redirectTo" value="http://localhost/racatum/index.php?pagina=faleconosco">
          <div class="row">
            <div class="">
              <label class="mb-1">* Nome</label>
              <div class="input-group form-group">
                <input type="text" name="name" placeholder="Digite seu nome completo" 
                required class="form-control form-control-lg" data-parsley-required-message="Por favor, digite seu nome">
              </div>

              <label>* E-mail</label>
              <div class="input-group form-group">
                <input type="email" name="email" placeholder="Digite seu e-mail"
                required class="form-control" data-parsley-required-message="Por favor, digite um e-mail" data-parsley-type-message="Por favor, forneça um e-mail válido">
              </div>

            <div class="">
              <label>* Telefone</label>
              <div class="input-group form-group">
                <input type="text" name="phone" placeholder="(00) 9 9900-9900" data-inputmask="'mask': '(99)9 9999-9999'" class="form-control" inputmode="numeric">
              </div>    
          </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="mensagem">Mensagem *</label>
                <textarea id="mensagem" class="form-control" name="message" rows="3" required data-parsley-message="Digite uma mensagem"></textarea>
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-dark" title="Enviar"><i class="fa fa-envelope"></i> Enviar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
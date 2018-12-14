<?php include 'components/header.php'; ?>

      <section class="fale-conosco">
         <div class="container">
            <h1 class="titulo-geral">Contato</h1>
            <form>
               <div class="form-group">
                  <label>Nome</label>
                  <input type="text" name="nome" id="nome" class="form-control" value="" />
               </div><!-- .form-group -->

               <div class="form-group">
                  <label>Assunto</label>
                  <input type="text" name="assunto" id="assunto" class="form-control" value="" />
               </div><!-- .form-group -->
               
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" value="" />
                     </div><!-- .form-group -->
                  </div><!-- .md-6 -->
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                     </div><!-- .form-group -->
                  </div><!-- .md-6 -->
               </div><!-- .row -->

               <div class="form-group">
                  <label>Mensagem</label>
                  <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
               </div><!-- .form-group -->

               <input type="submit" class="botao pull-right" value="Enviar" />
            </form>
         </div><!-- .container -->
      </section><!-- .fale-conosco -->

<?php include 'components/footer.php'; ?>   
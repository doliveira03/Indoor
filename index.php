<?php
include("header_usuario.php");
if(isset($_POST['entrar'])){
  $usuarios = new usuarios;

  if($erro = $usuarios->login($_POST['nome'], $_POST['senha'])){
    print_r($erro);
        echo $_POST['nome'];
    echo $_POST['senha'];
  }else{
    print_r($erro);
    echo $_POST['nome'];
    echo $_POST['senha'];
  }
}
?>

<!-- <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
  <form action="index.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Usuario: </label>
        <input type="text" class="form-control" name="nome" placeholder="Seu Nome">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Senha: </label>
        <input type="password" class="form-control" name="senha" placeholder="Senha">
      </div>
      <button type="submit" name="entrar" class="btn btn-default">Entrar</button>
  </form>
  </div>
  <div class="col-sm-4"></div>
</div> -->


 <div class="wrapper">
        <!-- Background -->
        <div id="fundo-externo">
            <div id="fundo">
                <img src="images/indoor.png" style="width:100%; height:92.6%;" />
            </div>
        </div>
   <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="index.php" method="POST">
                    <div class="form-login col-lg-12 text-center">

                            <i class="glyphicon glyphicon-user"></i>
                            <hr />

                            <div class="form-group col-lg-12 has-primary has-feedback">
                                <div class="form-group">
                                    <label>LOGIN</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <abbr title=""><i class="glyphicon glyphicon-log-in"></i></abbr>
                                        </span>
                                       <input type="text" class="form-control" name="nome" placeholder="Seu Nome">
                                       
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="form-group has-primary has-feedback">
                                <div class="form-group col-lg-12">
                                    <label>SENHA</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <abbr title=""><i class="glyphicon glyphicon-lock"></i></abbr>
                                        </span>
                                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="checkbox" style="position: relative;">
                                <label class="checkbox pull-left col-md-offset-1"><input type="checkbox" name="checkMantenha" id="checkMantenha" value="true"><b>Mantenha-me conectado</b></label>
                            </div>
                        <div class="col-lg-12"><hr /></div>
                            
                            <button type="submit" name="entrar" class="btn btn-primary btn-lg btn-block"><i class="glyphicon glyphicon-ok"></i>&nbsp;&nbsp;Acessar</button> 
                 
                        <br/>
                        <br/>
                       
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<?php
include("footer.php");
?>

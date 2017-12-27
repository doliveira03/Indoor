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
<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
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
  <div class="col-md-4"></div>
</div>
<?php
include("footer.php");
?>
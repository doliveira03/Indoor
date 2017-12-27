<?php
include("header.php");
?>
<div class="row">
	<div class="container">
	  <div class="col-md-2"></div>
	  <div class="col-md-4"><a href="novo_cadastro.php"><h3>Novo Cadastro?</h3></a></div>
	  <div class="col-md-4"><a href="consultar_cad.php"><h3>Consultar Cadastro</h3></a></div>
	  <div class="col-md-2"></div>
	</div>
</div>
<?php
if($true == 1){
?>
<div class="row">
	<div class="container">
	  <div class="col-md-2"></div>
	  <div class="col-md-4"><a href="novo_usuario.php"><h3>Criar novo usuario</h3></a></div>
	  <div class="col-md-4"><a href="list_usuarios.php"><h3>Todos os Usuarios</h3></a></div>
	  <div class="col-md-2"></div>
	</div>
</div>
<?php
}
?>
<?php
include("footer.php");
?>
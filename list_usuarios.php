<?php
include("header.php");
if($usuarios->verificar($_COOKIE['id'])){

}else{
	die("ERR0 404!");
}
if(isset($_GET['deletar'])){
	if($nada = $usuarios->deletar($_GET['deletar'])){
?>
<div class="alert alert-success" role="alert">Deletado com sucesso!</div>
<?php
	}else{
		echo "Error!";
	}
}

$resultado = $usuarios->verAdmin();
?>
<div class="row">
	<div class="container">
		<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Todos os usuários</div>
				<table class="table table-hover">
				  <tr>
				  	<th>Nome Completo</th>
				  	<th>E-mail</th>
				  	<th>Telefone</th>
				  	<th>Ação</th>
				  </tr>
				  <?php
				  while($fetch = $resultado->fetch_array(MYSQLI_ASSOC)){
				  ?>
				  <tr>
				  	<td><?php echo $fetch['nome_completo']; ?></td>
				  	<td><?php echo $fetch['email']; ?></td>
				  	<td><?php echo $fetch['telefone']; ?></td>
				  	<td><a href="ver_usuario.php?id=<?php echo $fetch['id']; ?>">Editar</a> / <a href="list_usuarios.php?deletar=<?php echo $fetch['id']; ?>">Deletar</a></td>
				  </tr>
				  <?php
					}
				  ?>
				</table>
			</div>	
		</div>	
	</div>	
</div>	
<?php
include("footer.php");
?>
<?php
include("header.php");
if(isset($_GET['id'])){
	$resultado = $usuarios->editarUsuario($_GET['id']);
	$fetch = $resultado->fetch_array(MYSQLI_ASSOC);
}else{
	die("ERROR 404!");
}
if(isset($_POST['editar'])){
	if($usuarios->atualizarDados($_POST['nome_completo'], $_POST['email'], $_POST['telefone'], $_POST['senha'], $_GET['id'])){
?>
	<div class="alert alert-success" role="alert"><?php echo "Atualizado com sucesso, pressione F5 para atualizar os dados!"; ?></div>
<?php
	}else{
		echo "Error!";
	}
}
?>
<div class="row">
	<div class="container">
		<div class="col-xs-12">
			<form action="ver_usuario.php?id=<?php echo $_GET['id']; ?>" method="POST">
				Nome Completo: <input class="form-control" type="text" name="nome_completo" value="<?php echo $fetch['nome_completo']; ?>"><br>
				E-mail: <input class="form-control" type="email" name="email" value="<?php echo $fetch['email']; ?>"><br>
				Telefone: <input class="form-control" type="text" name="telefone" value="<?php echo $fetch['telefone']; ?>"><br>
				Senha: <input class="form-control" type="password" name="senha" value="<?php echo $fetch['senha']; ?>"><br>
				<input class="form-control" type="submit" name="editar" value="Editar"><br>
			</form>
		</div>
	</div>
</div
<?php
include("footer.php");
?>
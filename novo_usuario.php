<?php
include("header.php");
if($usuarios->verificar($_COOKIE['id'])){

}else{
	die("ERR0 404!");
}
if(isset($_POST['criar'])){
	if($usuarios->criar($_POST['nome_completo'], $_POST['usuario'], $_POST['email'], $_POST['telefone'], $_POST['senha'], $_POST['admin'])){
?>
	<div class="alert alert-success" role="alert"><?php echo "Usuario criado com sucesso!"; ?></div>
<?php
		
	}else{
		echo "Error!";
	}
}
?>
<div class="row">
	<div class="container">
		<div class="col-xs-12">
			<form action="novo_usuario.php" method="POST">
				Nome Completo: <input class="form-control" type="text" name="nome_completo"><br>
				Usuario: <input class="form-control" type="text" name="usuario"><br> 
				E-mail: <input class="form-control" type="email" name="email"><br>
				Telefone: <input class="form-control" type="text" name="telefone"><br>
				Senha: <input class="form-control" type="password" name="senha"><br>
				Administrador: 
				<select name="admin" class="form-control">
					<option value="sim">Sim</option>
					<option value="">Não</option>
				</select><br>
				<input class="form-control" type="submit" name="criar" value="Criar Usuario"><br>
			</form>
		</div>
	</div>		
</div>
<?php
include("footer.php");
?>
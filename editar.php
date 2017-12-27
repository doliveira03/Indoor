<?php
include("header.php");
if(isset($_GET['id'])){
	if($usuario = $usuarios->ver($_GET['id'])){
		$fetch = $usuario->fetch_array(MYSQLI_ASSOC);
	}else{
?>
<div class="alert alert-success" role="alert"><?php echo "Sucesso!"; ?></div>
<?php	
	}

}else{
	die("ERROR 404!");
}
if(isset($_POST['botaoatualizar'])){
	if($_FILES['imagem']['type'] == "image/jpeg" || $_FILES['imagem']['type'] == "image/png"){
		$foto = $_FILES['imagem'];
		$true = 1;
		$old = 0;
	}else{
		$foto = NULL;
		$old = $fetch['foto'];
		$true = 0;
	}
	if($atualizar = $usuarios->update($_GET['id'], $_POST['nomecompleto'], $_POST['cpf'], $_POST['rg'], $_POST['autorizado'], $_POST['dataehora'],
	 $_POST['destino'], $_POST['telefone'], $_POST['cracha'], $_POST['empresa'], $_POST['observacao'], $foto, $true, $old)){
?>
<div class="alert alert-success" role="alert"><?php echo "Sucesso!"; ?></div>
<?php		
	}else{
		echo "Error!";
	}
}
?>
<div class="row">
	<div class="col-xs-2">
	</div>
	<div class="col-xs-8">
		<form action="editar.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data" method="POST">
			Nome: <input class="form-control" type="text" name="nomecompleto" value="<?php echo $fetch['nome']; ?>"><br><br>
			CPF: <input class="form-control" type="text" name="cpf" value="<?php echo $fetch['cpf']; ?>"><br><br>
			RG: <input class="form-control" type="text" name="rg" value="<?php echo $fetch['rg']; ?>"><br><br>
			Autorizado por: <input class="form-control" type="text" name="autorizado" value="<?php echo $fetch['autorizado']; ?>"><br><br>
			Data & Hora: <input type='text' id="datetimepicker1" value="<?php echo $fetch['data']; ?>" name="dataehora" class="form-control" />
			<script type="text/javascript">
	            $(function () {
	                $('#datetimepicker1').datetimepicker();
	            });
	        </script><br><br>
			Destino: <input class="form-control" type="text" name="destino" value="<?php echo $fetch['destino']; ?>"><br><br>
			Telefone de Contato: <input class="form-control" type="text" name="telefone" value="<?php echo $fetch['telefone']; ?>"><br><br>
			Número do Crachá: <input class="form-control" type="text" name="cracha" value="<?php echo $fetch['cracha']; ?>"><br><br>
			Empresa: <input class="form-control" type="text" name="empresa" value="<?php echo $fetch['empresa']; ?>"><br><br>
			Foto: <input class="form-control" type="file" name="imagem"><br><br> 
			Observações: <textarea rows="5" class="form-control" name="observacao"><?php echo $fetch['observacao']; ?></textarea><br><br>
			<input type="submit" class="form-control" name="botaoatualizar" value="Editar"><br> 
		</form>
	</div>
	<div class="col-xs-2">
	</div>	
</div>
<?php
include("footer.php");
?>
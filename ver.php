<?php
include("header.php");
if($_GET['id']){
	if($fetchall = $usuarios->ver($_GET['id'])){
		$fetch = $fetchall->fetch_array(MYSQLI_ASSOC);
	}else{
		die("ERROR 404!");
	}
}else{
	die("ERROR 404!");
}

?>
<div class="row">
<div class="col-xs-2">
</div>
<div class="col-xs-8">
	<div class="col-xs-7">
	Nome Completo: <strong><?php echo $fetch['nome']; ?></strong><br><br>
	CPF: <strong><?php echo $fetch['cpf']; ?></strong><br><br>
	RG: <strong><?php echo $fetch['rg']; ?></strong><br><br>
	Autorizado por: <strong><?php echo $fetch['autorizado']; ?></strong><br><br>
	Data & Hora: <strong><?php echo $fetch['data']; ?></strong><br><br>
	Destino: <strong><?php echo $fetch['destino']; ?></strong><br><br>
	Telefone de Contato: <strong><?php echo $fetch['telefone']; ?></strong><br><br>
	Número do Crachá: <strong><?php echo $fetch['cracha']; ?></strong><br><br>
	Empresa: <strong><?php echo $fetch['empresa']; ?></strong><br><br>
	Observações: <strong><?php echo $fetch['observacao']; ?></strong><br>
	</div>
	<div class="col-xs-4">
	<img width="250" height="200" src="<?php echo $fetch['foto']; ?>">
	</div>
</div>
<div class="col-xs-2">
</div>
</div>
<div class="row">
<div class="col-xs-12">
	<div class="col-xs-10">
	</div>
	<div class="col-xs-2">
		<a href="editar.php?id=<?php echo $_GET['id']; ?>">Editar</a>
	</div>
</div>
</div>
<?php
include("footer.php");
?>
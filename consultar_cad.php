<?php
include("header.php");
if(isset($_POST['botaobusc'])){
	$fetch = $usuarios->buscar($_POST['buscar'], $_POST['cpf']);
}
?>
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
	<center>
	<h1>Buscar:</h1>
	<form class="form-inline" action="consultar_cad.php?show" method="POST">
		<input type="text" name="buscar" class="form-control" placeholder="Digite o nome ou CPF" size="70">
		<input type="radio" name="cpf" value="1"> Buscar por CPF
		<input type="submit" name="botaobusc" class="form-control btn btn-success" value="Procurar">
	</form>
	</center>
	</div>
	<div class="col-md-2">
	</div>	
</div>
<?php
if(isset($_GET['show'])){
?>
<br>
<br>
<div class="row">
<div class="col-md-2">
</div>
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading">Resultado: </div>
    <table class="table">
    	<tr>
    		<th>ID</th>
    		<th>Nome</th>
    		<th>CPF</th>
    		<th>RG</th>
    		<th>Ação</th>
    	<tr>
<?php	
	while($real = $fetch->fetch_array(MYSQLI_ASSOC)){
?>
		<tr>
			<td>#<?php echo $real['id']; ?>
			<td><?php echo $real['nome']; ?></td>
			<td><?php echo $real['cpf']; ?></td>
			<td><?php echo $real['rg']; ?></td>
			<td><a href="ver.php?id=<?php echo $real['id']; ?>">VER MAIS</a></td>
		</tr>
<?php
	}
?>
	 </table>
	</div>
</div>	
</div>
<div class="col-md-2">
</div>
</div>
<?php	
}
?>

<?php
include("footer.php");
?>
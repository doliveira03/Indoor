<?php
include("header.php");
if(isset($_POST['cadastrar'])){
	if($usuarios->cadastrar($_POST['nomecompleto'], $_POST['cpf'], $_POST['rg'], $_POST['autorizado'], $_POST['dataehora'],
	 $_POST['destino'], $_POST['telefone'], $_POST['cracha'], $_POST['empresa'], $_POST['observacao'], $_FILES['imagem'])){
?>
	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Sucesso!</strong> cadastro adicionado.
	</div>
<?php
	}else{
?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Erro!</strong>
	</div>
<?php
	}
}
?>
<script type="text/javascript">
$(document).ready(function() {
  $.uploadPreview({
    input_field: "#image-upload",   // Default: .image-upload
    preview_box: "#image-preview",  // Default: .image-preview
    label_field: "#image-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false                 // Default: false
  });
});

$('#dataehora').datetimepicker();
</script>
<div class="row">
	<div class="container">
		<div class="col-md-6">
			<form action="novo_cadastro.php" method="POST" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="nomecompleto">Nome Completo*: </label>
			    <input name="nomecompleto" type="text" required="required" class="form-control" id="nomecompleto" placeholder="Ex: José da Silva Santos">
			  </div>
			  <div class="form-group">
			    <label for="cpf">CPF: </label>
			    <input name="cpf" type="text" class="form-control" id="cpf" placeholder="Ex: 000.000.000-00">
			  </div>
			  <div class="form-group">
			    <label for="rg">RG: </label>
			    <input name="rg" type="text" class="form-control" id="rg" placeholder="Ex: 00.000.000-0">
			  </div>  
			  <div class="form-group">
			    <label for="autorizado">Autorizado Por: </label>
			    <input name="autorizado" type="text" class="form-control" id="autorizado">
			  </div>    
			 <div class="form-group">
			 	<label for="autorizado">Data & Hora: </label>
			            <input type='text' id="datetimepicker1" name="dataehora" class="form-control" />
			  </div>   
			<script type="text/javascript">
	            $(function () {
	                $('#datetimepicker1').datetimepicker();
	            });
	        </script>
			  <div class="form-group">
			    <label for="destino">Destino: </label>
			    <input name="destino" type="text" class="form-control" id="destino">
			  </div>      
			  <div class="form-group">
			    <label for="telefone">Telefone de Contato: </label>
			    <input name="telefone" type="text" class="form-control" id="telefone">
			  </div>  
			  <div class="form-group">
			    <label for="cracha">N do Crachá: </label>
			    <input name="cracha" type="text" class="form-control" id="cracha">
			  </div>         
			  <div class="form-group">
			    <label for="empresa">Empresa: </label>
			    <input name="empresa" type="text" class="form-control" id="empresa" placeholder="Empresa">
			  </div>      
			  <div class="form-group">
			    <label for="observacao">Observação: </label>
			    <textarea class="form-control" id="observacao" name="observacao" cols="10" rows="5"></textarea>
			  </div>    			  
			  <label for="image-upload" id="image-label">Foto: </label>
				  <input name="imagem" class="form-control" type="file" name="image" id="image-upload" />
			  <br>
			  <button type="submit" name="cadastrar" class="form-control btn btn-success">Cadastrar</button>
			</form>
		</div>
		<div class="col-md-6">
			<div id="image-preview">
			</div>

		</div>
	</div>
</div>
<
<?php
include("footer.php");
?>
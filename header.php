<?php
require("class/class.php");
date_default_timezone_set("America/Sao_Paulo");
if($_COOKIE['logado']){
	$usuarios = new usuarios;
	$tudo = $usuarios->verificar($_COOKIE['id']);
	$fet = $tudo->fetch_array(MYSQLI_ASSOC);
	if($fet['admin'] == 'sim'){
		$true = 1;
	}else{
		$true = 0;
	}
}else{
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administração</title>
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.uploadPreview.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	  <link rel="stylesheet" type="text/css" href="css/estiloIndoor.css"/>
	<script src="js/jquery.datetimepicker.full.min.js"></script>
    <style type="text/css">
 		@media print { 
            #noprint { display:none; } 

        }

		#image-preview {
		  width: 250px;
		  height: 250px;
		  float: right;
		  position: relative;
		  overflow: hidden;
		  background-image: url("images/sem-imagem-avatar.png");
		  background-size: 250px;
		  color: #ecf0f1;
		  input {
		    line-height: 200px;
		    font-size: 200px;
		    position: absolute;
		    opacity: 0;
		    z-index: 10;
		  }
		  label {
		    position: absolute;
		    z-index: 5;
		    opacity: 0.8;
		    cursor: pointer;
		    background-color: #bdc3c7;
		    width: 200px;
		    height: 50px;
		    font-size: 20px;
		    line-height: 50px;
		    text-transform: uppercase;
		    top: 0;
		    left: 0;
		    right: 0;
		    bottom: 0;
		    margin: auto;
		    text-align: center;
		  }
		}
	</style>
  </head>
  <body>
  	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php">InDoor</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="sair.php">Sair</a></li>
  	  </ul>
  	  <p class="navbar-text navbar-right"><?php echo date("h:i:s")." ".date("d/m/Y"); ?></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

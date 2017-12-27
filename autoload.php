<html>
<head>
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript">
	function auto_load(){
        $.ajax({
          url: "reload.php",
          cache: false,
          success: function(data){
             $("#load").html(data);
          } 
        });
	}
	 
	$(document).ready(function(){
	 
	auto_load(); //Call auto_load() function when DOM is Ready
	 
	});
	 
	//Refresh auto_load() function after 10000 milliseconds
	setInterval(auto_load,100);
	</script>
	<title></title>
</head>
<body>
<div id="load">
</div>
</body>
</html>
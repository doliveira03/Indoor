<?php
setcookie("logado", 0, time()-36000);
setcookie("id", 0, time()-36000);
header("location:index.php");
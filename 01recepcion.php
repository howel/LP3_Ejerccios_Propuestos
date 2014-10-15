<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>01recepcion</title>
	</head>
	<body bgcolor="#00CCFF">  
		
		<?php 

		   $n1=$_POST['a']; 
		   for ($b=1;$b<=$n1;$b++) 
		   {
			   	for ($a=1;$a<=$b;$a++) 
			   	{
			   		echo '*';
			   	} 
			    echo '<br>'; 
		   } 
		   echo "<br>EL NUMERO DE FILAS INGRESADAS ES : ".$n1;
	 	?> 
    
		<p><a href="01.php">&lt;&lt;REGRESAR&gt;&gt; </a>- <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
		<p>&nbsp;</p>
        
	</body>
</html>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>10recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
    <div align="center">
		
		  <?php 
			$nombre=$_REQUEST['nombre'];
			$nacimiento=$_REQUEST['nacimiento'];
			$lugar=$_REQUEST['lugar'];
			$region=$_REQUEST['region'];
		
			echo "<h2>El estudiante ($nombre) tiene ($nacimiento) <br> Departamento de ($lugar) que pertenece a la ($region).</h2>";
		?>	 
    
		<p><a href="10.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>

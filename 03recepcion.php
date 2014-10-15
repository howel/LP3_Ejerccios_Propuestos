<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>03recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		 	<?php
				// Obtenemos la variable del formulario:
				$Cantidad = COUNT($_POST['valores']);
				$suma=0;
				// Mostramos los datos del arreglo haciendo uso de un for
				echo "Los Números Ingresados Son : <br>";
				echo "*************************<br>";
				for($i=0;$i<$Cantidad;$i++) 
				{
				    // $i -> Es el indice del arreglo 
				   $Mostrar = $_POST["valores"][$i];
				   echo "$Mostrar , ";
				   $suma=$suma+$_POST["valores"][$i];
				}
				echo "<br><br>*************************<br>";
				echo "La Suma es : ".$suma."<br>"."El Promedio es : ".($suma/2)."<br>"."El Número Menor Es : ".min($_POST['valores'])."<br>"."El Número Mayor Es : ".max($_POST['valores']);	
			?>
		
			<p><a href="03.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
		</div>
	</body>
</html>



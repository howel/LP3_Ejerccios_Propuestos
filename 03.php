<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio.03</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
			<form name="from1" method="post" action="03recepcion.php">
					<?php
						$n=$_REQUEST['cantidad'];				
					?>

					<?php for ($i=1; $i<=$n; $i++) {?>
						Nro<?php echo $i ?>: <input type="number" name="valores[]"><br><br>
						
					<?php 
						
					} ?>
					<br>
					<input type="submit" value="Aceptar">
			</form>	

			<p><a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
		</div>
	</body>
</html>



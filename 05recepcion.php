<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>05recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		  <?php

			$nro=$_REQUEST['numero'];

			echo "<h3>El Cuadrado de Los Números Impares del 1 al $nro son : </h3>";

			$n=1;
			while ($n<=$nro) 
			{
				if ($n % 2 <> 0) 
				{
					$res=pow($n, 2);
					echo "<font size="."5".">El cuadrado de &nbsp&nbsp&nbsp<b>".$n."</b>&nbsp&nbsp&nbsp es: &nbsp&nbsp<b>".$res."</b></font><br>";
				}
				$n=$n+1;
			}
		?>
    
		<p><a href="05.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>

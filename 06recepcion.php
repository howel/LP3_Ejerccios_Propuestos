<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>06recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		  <?php
			$nro=$_REQUEST['numero'];
			if ($nro>0) {
				$u = ($nro % 10); 
				$d = (($nro / 10) % 10);
				$c = ($nro / 100) % 10;
				$m = ($nro / 1000) % 10;

				$r1=$u*1;
				$r2=$d*10;
				$r3=$c*100;
				$r4=$m*1000;

				echo "El Número : $nro tiene : <br>********************<br>";
				echo "$m Millares. <br>$c Centemas. <br>$d Decenas. <br>$u Unidades.";
				echo "<br>********************<br>";
				echo "$r4 , $r3 , $r2 y $r1";
			}
			elseif ($nro<=0) {
				echo "Ingrear un Número mayo que 0";
			}
		?>
    
		<p><a href="06.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>
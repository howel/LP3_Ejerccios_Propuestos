<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>02recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		  <?php
			$npar=$_REQUEST['npar'];
			
			if ($npar % 2 == 0) {
				echo "<h3>Los Numeros Pares Entre 2 y $npar Son :</h3>";
				$suma=0;
				$cont=0;
				$n=$npar/2;

				for ($i=0; $i < $n; $i++) { 
					$cont=$cont + 2;
					$suma=$suma + $cont;
					echo "Numero : $cont <br>";
				}

				echo "<h2>La Suma De Los Números Pares Es : $suma</h2>";
			}
			elseif ($npar % 2 <> 0) {
				echo "El Numero ($npar) Ingresado no es un Número par.";
			}
		?>		 
    
		<p><a href="02.php">&lt;&lt;REGRESAR&gt;&gt;</a> -  <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>
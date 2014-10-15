<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>04recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		  <?php
			$n1=$_REQUEST['nro1'];
			$n2=$_REQUEST['nro2'];
			$n3=$_REQUEST['nro3'];
			
			echo "Los Números ingresados son: ".$n1."-".$n2."-".$n3."<br>******************************************<br>";

			if ($n1==$n2) {
				if ($n1==$n3) {
					echo "Los 3 números son iguales";
				}
			}

			if ($n1 > $n2 ) {
				if ($n1 > $n3) {
					$suma = $n1 + $n2 +$n3;
					echo "La suma de los 3 números ingresados es : ".$suma;
				}
			}

			if ($n2 > $n1) {
				if ($n2 > $n3) {
					$multiplica = $n1 * $n2 * $n3;
					echo "La multiplicación de los 3 números ingresados es : ".$multiplica;
				}
			}

			if ($n3 > $n1) {
				if ($n3 > $n2) {
					$resultado=($n3 + $n1) * $n2;
					echo "El resultado es: ".$resultado;
				}
			}
		?>
    
		<p><a href="04.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>





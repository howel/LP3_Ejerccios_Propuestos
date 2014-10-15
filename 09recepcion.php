<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>09recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
		<div align="center">
		  <?php
 
			//fecha actual
			 
			$dia=date('j');
			$mes=date('n');
			$ano=date('Y');
			 
			//fecha de nacimiento
			 
			$d=$_REQUEST['dia'];
			$m=$_REQUEST['mes'];
			$a=$_REQUEST['año'];
			 
			//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
			 
			if (($m == $mes) && ($d > $dia)) {
			$ano=($ano-1); }
			 
			//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
			 
			if ($m > $mes) {
			$ano=($ano-1);}
			 
			//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
			 
			$edad=($ano-$a);
			echo "Su edad actual es : ".$edad." años. Por lo tando :<br>";
			echo "*******************************************<br><br>";
			if ($edad >= 18) {
				echo "Es mayor de edad";
			}
			elseif ($edad < 18) {
				echo "Es menor de edad";
			}
			 
			//print $edad;	 
		?>
   
		<p><a href="09.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>




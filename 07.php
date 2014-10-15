<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio.07</title>
	</head>

	<body bgcolor="#00CCFF"> 

		<div align="center"> 

			<h1>CALCULADORA</h1> 

		  <form method="POST"> 

				<font color="blue">Ingrese una operacion válida:</font><BR/> 
				<input type="text" name="caja" placeholder="ejemplo: 1+5, 6-4, 7*3, 10/2..." size=30><br/> 
				<br/> 
				<input type="submit" value="Procesar..."><br/> 
				<br/> 

				<?php 

					if(isset($_POST['caja'])){ 

						$caja=$_POST['caja']; 

						if($caja==''){ 

							echo '<font color="red"><b>Ingrese un valor</b></font>'; 
						}
						
						else{ 
							$resul="echo $caja;"; 

							echo '<table border="0">'; 

							echo '<tr bgcolor="#DBDB70">'; 
							echo '<td>'; 
							echo '<strong>Operacion</strong>'; 
							echo '</td>'; 

							echo '<td>'; 
							echo '<strong>Resultado</strong>'; 
							echo '</td>'; 
							echo '</tr>'; 

							echo '<tr bgcolor="#38B0DE">'; 
							echo '<td>'; 
							echo '<center><B>'.$caja.'</center></B>'; 
							echo '</td>'; 

							echo '<td>'; 
							echo '<center><B>'; 
							eval($resul); 
							echo '</center></B>'; 
							echo '</td>'; 
							echo '</tr>'; 

							echo '</table>'; 
						} 
					}//isset 
				?> 
			</form> 

			<p><b>Nota:</b> tambien acepta el uso de parentesis, <b>ejemplo: (8*2)/(5-3)</b><br> 
			Para potencia, escribir pow(base,potencia), <b>ejemplo: pow(2,5)</b><br/> 
			Para raiz, utilizar sqrt(numero), <b>ejemplo: sqrt(25)</b> 
		    </p>
			<p><a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
		</div>
	</body> 
</html>
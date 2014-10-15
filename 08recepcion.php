<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>08recepcion</title>
	</head>

	<body bgcolor="#00CCFF">
    <div align="center">
		<h1>DATOS DEL ALUMNO : </h1>

		  <?php
			$nombre=$_REQUEST['nombres'];
			$apellido=$_REQUEST['apellidos'];
			$edad=$_REQUEST['edad'];
			$sexo=$_REQUEST['sexo'];
			$lugar=$_REQUEST['lugar'];
			$estado=$_REQUEST['estado'];
			$dni=$_REQUEST['dni'];
			$religion=$_REQUEST['religion'];
			$celular=$_REQUEST['celular'];
			$telefono=$_REQUEST['telefono'];
			$email=$_REQUEST['email'];
			$direccion=$_REQUEST['direccion'];
	
		?>
	
		<table bgcolor="#99FF33" width="296" border="0" align="center" cellpadding="5" cellspacing="3">
		  <tr bgcolor="#FF9966">
		    <td width="102">Nombre</td>
		    <td width="165">: <?php print $nombre;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Apellidos</td>
		    <td>: <?php print $apellido;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Edad</td>
		    <td>: <?php print $edad;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Sexo</td>
		    <td>: <?php print $sexo;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Ubicacion</td>
		    <td>: <?php print $lugar;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Estado Civil</td>
		    <td>: <?php print $estado;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Dni</td>
		    <td>: <?php print $dni;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Religion</td>
		    <td>: <?php print $religion;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Celular</td>
		    <td>: <?php print $celular;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Telefono</td>
		    <td>: <?php print $telefono;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Email</td>
		    <td>: <?php print $email;?></td>
	      </tr>
		  <tr bgcolor="#FF9966">
		    <td>Direccion</td>
		    <td>: <?php print $direccion;?></td>
	      </tr>
    	</table>
		<a href="08.php">&lt;&lt;REGRESAR&gt;&gt;</a> - <a href="index.php">&lt;&lt;INICIO&gt;&gt; </a>
        </div>
</body>
</html>
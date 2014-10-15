<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio.08</title>
	</head>

	<body bgcolor="#00CCFF">
    <div align="center">
    <h1>DATOS PERSONALES DEL ALUMNO </h1>
    <form name="form1" method="post" action="08recepcion.php">
	  <table bgcolor="#FFCC99" width="251" border="0" align="center" cellpadding="5" cellspacing="3">
		    <tr>
		      <td width="73">Nombres(s)</td>
		      <td width="144"><input type="text" name="nombres" id="nombres"></td>
	        </tr>
		    <tr>
		      <td>Apellidos</td>
		      <td><input type="text" name="apellidos" id="apellidos"></td>
	        </tr>
		    <tr>
		      <td>Edad</td>
		      <td><input type="text" name="edad" id="edad"></td>
	        </tr>
		    <tr>
		      <td>Sexo</td>
		      <td><p>
		        <label>
		          <input type="radio" name="sexo" value="Masculino" id="Radio_0">
		          Masculino</label>
		        <br>
		        <label>
		          <input type="radio" name="sexo" value="Femenino" id="Radio_1">
		          Femenino</label>
		        <br>
	          </p></td>
	        </tr>
		    <tr>
		      <td>Lugar de Nacimiento</td>
		      <td><select name="lugar" id="lugar">
		        <option>Seleccione...</option>
		        <option value="San Martin">San Martin</option>
		        <option value="Lima">Lima</option>
		        <option value="Cajamarca">Cajamarca</option>
		        <option value="Amazonas">Amazonas</option>
		        <option value="Piura">Piura</option>
		        <option value="Cuzco">Cuzco</option>
		        <option value="Iquitos">Iquitos</option>
		        <option value="Madre de Dios">Madre de Dios</option>
		        <option value="La Libertad">La Libertad</option>
		        <option value="Arequipa">Arequipa</option>
		        <option value="Tacna">Tacna</option>
	          </select></td>
	        </tr>
		    <tr>
		      <td>Estado Civil</td>
		      <td><select name="estado" id="estado">
		        <option>Selecione...</option>
		        <option value="Soltero(a)">Soltero(a)</option>
		        <option value="Casado(a)">Casado(a)</option>
		        <option value="Divorciado(a)">Divorciado(a)</option>
	          </select></td>
	        </tr>
		    <tr>
		      <td>Dni</td>
		      <td><input type="text" name="dni" id="dni"></td>
	        </tr>
		    <tr>
		      <td>Creencias religiosas</td>
		      <td><input type="text" name="religion" id="religion"></td>
	        </tr>
		    <tr>
		      <td>Teléfono</td>
		      <td><input type="text" name="telefono" id="telefono"></td>
	        </tr>
		    <tr>
		      <td>Celular</td>
		      <td><input type="text" name="celular" id="celular"></td>
	        </tr>
		    <tr>
		      <td>E-mail</td>
		      <td><input type="text" name="email" id="email"></td>
        </tr>
		    <tr>
		      <td>Direccion</td>
		      <td><input type="text" name="direccion" id="direccion"></td>
        </tr>
		    <tr>
		      <td>&nbsp;</td>
		      <td><input type="submit" name="aceptar" id="aceptar" value="Aceptar"></td>
        </tr>
	      </table>
		  <br>
		</form>
    <p>&nbsp;</p>
    <p><a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
    </div>
	</body>
</html>




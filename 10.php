<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercicio.10</title>
	</head>
	<body bgcolor="#00CCFF">
    <div align="center">
		<h1>Ejercicio.10</h1>
		
		<form name="formulario10" method="post" action="10recepcion.php">

			<table border="0" align="center" cellpadding="5" cellspacing="3"  bgcolor="#99CC33">
				<tr>
					<th>Nombre y Apellidos</th>
					<td><input type="text" name="nombre" id="nombre"></td>
				</tr>

				<tr>
					<th>Edad</th>
					<td><input type="text" name="nacimiento" id="nacimiento"></td>
				</tr>

				<tr>
					<th>Lugar de Nacimiento</th>
					<td><select name="lugar" id="lugar">
					  <option>Seleccione...</option>
					  <option value="San matin">San matin</option>
					  <option value="Lima">Lima</option>
					  <option value="Trujillo">Trujillo </option>
					  <option value="Huancayo">Huancayo</option>
                    </select></td>
				</tr>
				<tr>
				  <th>Region</th>
				  <td><select name="region" id="region">
				    <option>Seleccione...</option>
				    <option value="Region selva">Region Selva</option>
				    <option value="Region Sierra">Region Sierra</option>
				    <option value="Region Costo">Region Costo</option>
			      </select></td>
			  </tr>

				<tr>
					<td></td>
					<td><input name="enviar" type="submit" id="enviar" value="Aceptar"></td>
				</tr>
			</table>
		</form>
		<p>&nbsp;</p>
		<p><a href="index.php">&lt;&lt;INICIO&gt;&gt; </a></p>
        </div>
	</body>
</html>
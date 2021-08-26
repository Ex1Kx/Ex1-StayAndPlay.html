<?php
$servidor="localhost";
$usuario="root";
$clave="";
$BaseDeDatos="registro";
$enlace = mysqli_connect($servidor, $usuario, $clave, $BaseDeDatos);
if(!$enlace){
	echo"Error de conexion";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>StayAndPlayRegister</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <header>
    	<a href="index.html" class="logo"><img src="imagenes/3.png" alt=""></a>
    </header>
    <body>
	<div class="contenedor">
		<h2>Stay And Play Registro</h2>

		<form action="#" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<i class="fas fa-user"></i>
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="correo" placeholder="Correo">
				<i class="fas fa-envelope-open-text"></i>
				<input type="password" name="contrasena" placeholder="Contraseña">
				<i class="fas fa-unlock"></i>

				<div class="sexo">
					<input type="radio" name="sexo" id="hombre" value="hombre">
					<label class="label-radio hombre" for="hombre">Hombre</label>

					<input type="radio" name="sexo" id="mujer" value="mujer">
					<label class="label-radio mujer" for="mujer">Mujer</label>

					<input type="radio" name="sexo" id="NoBinario" value=NoBinario>
					<label class="label-radio NoBinario" for="NoBinario">No Binario</label>
				</div>

				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">He Leido Y Acepto Los Terminos Y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		<div class="tabla">
			<table>
				<tr>
			
					
				</tr>
		
						
						
				
				
			</table>
		</div>
	</div>
</body>
</html>
<?php
if(isset($_POST['registrarse'])){
	$nombre=$_POST["nombre"];
	$correo=$_POST["correo"];
	$contrasena=$_POST["contrasena"];
	$sexo=$_POST["sexo"];

	$insertarDatos = "INSERT INTO datos VALUES('$nombre', '$correo', '$contrasena', '$sexo')";

	$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

	if(!$ejecutarInsertar){
		echo"error en la linea de codigo";
	}
}
?>
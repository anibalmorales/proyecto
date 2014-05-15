<?php
$nombre         = "";
$apellido  = "";
$direccion         = "";
$correo  = "";
$telefono  = "";
$usuario         = "";
$password  = "";
$password2         = "";


if( isset($_POST['nombre']) )       
    $nombres         = trim($_POST['nombre']);
if( isset($_POST['apellido']) ) 
    $apellidos  = trim($_POST['apellido']); 
if( isset($_POST['direccion']) )       
    $direccion         = trim($_POST['direccion']);
if( isset($_POST['correo']) ) 
    $correo  = trim($_POST['correo']); 
if( isset($_POST['telefono']) )       
    $telefono         = trim($_POST['telefono']);
if( isset($_POST['usuario']) )       
    $usuario         = trim($_POST['usuario']);
if( isset($_POST['password']) ) 
    $password  = trim($_POST['password']); 
if( isset($_POST['password2']) ) 
    $password2  = trim($_POST['password2']); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
<html>
<head>
    <title>Registrar Usuario</title>
</head>
<body>
  <script type="text/javascript">
    <!--
        $().ready(function() {
        $("#registrar_usuario").validate({
        rules: {
        /*A continuacion los nombres de los campos y sus reglas a cumplir */
            nombre: {
                required: true, minlength: 3
            },
            apellido: {
                required: true, minlength: 3
            },
	    
	    direccion: {
                required: true, minlength: 3
            },
            correo: {
                required: true, minlength: 5, email: true
            },
	    telefono: {
                required: true, minlength: 3
            },
            usuario: {
                required: true, minlength: 5
            },
            password: {
                required: true, minlength: 5
            },
            password2: {
                required: true, minlength: 5,   equalTo: "#password"
            }
 
        },
 
        });
        };
    // -->
    </script>
	<form id="registrar_usuario" name="registrar_usuario"  method="POST" action="guardarRegistro.php">
    <table align="center" width="300px">
    <tr>
    <td colspan="2" align="center"><h3>Registro de Usuarios:</h3></td></tr>


        <tr><td>
                Correo electronico:
        </td>
        <td>
                <input type="text" name="nombre" id="nombre" value='<?php echo $nombre ?>'>
        </td></tr>
    

        <tr><td>
                Apellidos
        </td>
        <td>
                <input type="text" name="apellido" id="apellido" value='<?php echo $apellido ?>'>
        </td></tr>


        <tr><td>
                Direccion
        </td>
        <td>
                <input type="text" name="direccion" id="direccion" value='<?php echo $direccion ?>'>
        </td></tr>


        <tr><td>
                Correo Electronico
        </td>
        <td>
                <input type="text" name="correo" id="correo" value='<?php echo $correo ?>'>
        </td></tr>


         <tr><td>
                Telefono
        </td>
        <td>
                <input type="text" name="telefono" id="telefono" value='<?php echo $telefono ?>'>
        </td></tr>


        <tr><td>
                Usuario
        </td>
        <td>
                <input type="text" name="usuario" id="usuario" value='<?php echo $usuario ?>'>
        </td></tr>



        <tr><td>
                Contraseña
        </td>
        <td>
                <input type="password" name="password" id="password" value='<?php echo $password ?>'>
        </td></tr>
  

        <tr><td>
                Validar Contraseña
        </td>
        <td>
                <input type="password" name="password2" id="password2" value='<?php echo $password2 ?>'>
        </td></tr>


        <br><br>
        <tr><td><br>
                <input type="button" onClick="javascript: location.href='index.php'" name="cancelar" value="Cancelar">
        </td>
        <td><br>
                <input type="submit" name="enviar" value="Enviar">
        </td></tr>
		
    <table align="center" width="300px">
	</form>
</body>
</html>

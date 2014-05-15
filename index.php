<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>index</title>
     
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <script src="jquery171.js" type="text/javascript"></script> 
    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.alerts.js"></script>
    <link href="jquery.alerts.css" rel="stylesheet" type="text/css" />
     
    <script type="text/javascript">
    <!--
        $().ready(function() {
            $("#frmlogin").validate();
            $("#usuario").focus();
        });
    // -->
    </script>
     
</head>
<body>
<br /><br />
<form id="frmlogin" name="frmlogin"  method="POST" action="validarUsuario.php">
<table align="center" width="200px">
<tr>
    <td colspan="2" align="center"><h3>Iniciar sesi&oacute;n</h3></td>
</tr>
<tr>
    <td>Usuario</td>
    <td>
        <label for="txtUser"></label>
        <input type="text" name="txtUser"> </br>
    </td>
</tr>
 
<tr>
    <td>Password</td>
    <td>
        <label for="txtPassword"></label>
        <input type="password" name="txtPassword"></br>
    </td>
</tr>
<tr >
    <td colspan="2" >
        <a href="recuperarPassword.php">
            Olvide mi contrase&ntilde;a
        </a>
    </td>
</tr>
 
<tr>
    <td colspan="2" align="right">
        <input type="submit" name="btnGuardar" value="Enviar">
    </td>
 
</tr>
     
<tr>
    <td colspan="2" align="right" >
        <br/><a href="registro.php">Deseo registrarme</a>
    </td>
</tr> 
    
</table>
</form>
</body>
</html>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Recuperar Password</title>
     
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
</head>
<body>
<br /><br />
 
 
<form id="recPassword" name="recPassword"  method="POST" action="recuperarPassword.php">
 
<table align="center" width="400px">
 
<tr>
    <td colspan="2" align="center"><h3><b>Recuperar Password PENDIENTE</b></h3></td>
</tr>
 
<tr>
    <td colspan="2">Escriba su correo electronico con el que se ha registrado, 
        se le enviara un nuevo password a su correo electronico:<br /><br /> 
    </td>
</tr>
 
<tr>
    <td>Correo electronico:</td>
    <td>
        <input type="text" name="correo" id="correo"  maxlength="50" />
    </td>
</tr>
<tr>
    <td>Confirme Correo electronico:</td>
    <td>
        <input type="text" name="correo2" id="correo2" maxlength="50" />
    </td>
</tr>
<tr>
    <td align="center" colspan="2">
        <br /><br /> 
        <input type="button" onClick="javascript: location.href='index.php'" name="cancelar" value="Cancelar" >
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="enviar" value="Enviar" >
    </td>
</tr>
 
</table>
</form>
</body>
</html>
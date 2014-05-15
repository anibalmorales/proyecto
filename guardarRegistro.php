<?php

    $nombre         =trim($_POST['nombre']);
    $apellido  =trim($_POST['apellido']);
    $direccion  =trim($_POST['direccion']);
    $correo         =trim($_POST['correo']);
    $telefono         =trim($_POST['telefono']);
    $usuario       =trim($_POST['usuario']);
    $password       =trim($_POST['password']);
    $password2  =trim($_POST['password2']);
    
      //Devuelve true si la cadena que llega esta VACIA
    function estaEnBlanco($cadena) {
        if(strlen( trim($cadena) ) == 0 )
            return true;
        return false;
    }
 
    //Devuelve true si la longitud de la cadena (primer parametro)
    // que llega  es menor que el numero (segundo parametro)
    function validaTamanio($cadena,$longitud) {
        if(strlen( trim($cadena) ) < $longitud )
            return true;
        return false;
    }
 
    // devuelve true SI ha escrito, un email NO VALIDO
    function esCorreoInvalido($str_email) {
        if(!filter_var(trim($str_email), FILTER_SANITIZE_EMAIL))
            return true;
        return false;
    }
 
    // devuelve una cadena escapada de algunos caracteres que
    // pudieran servir para un ataque de sql injection
    function escaparQuery($cadena) {
        $str_KeywordsSQL            = array("select ","insert ","delete ","update ","union ");
        $str_OperadoresSQL      = array("like ","and ","or ","not ","<",">","<>","=","<");
        $str_DelimitadoresSQL = array(";","(",")","'");
 
        //Quitar palabras reservadas y operadores
        for($i=0; $i<count($str_KeywordsSQL); $i++) {
            $cadena = str_replace($str_KeywordsSQL[$i], "",strtolower($cadena) );
        }
        for($i=0; $i<count($str_OperadoresSQL); $i++) {
            $cadena = str_replace($str_OperadoresSQL[$i], "",strtolower($cadena) );
        }
        for($i=0; $i<count($str_DelimitadoresSQL); $i++) {
            $cadena = str_replace($str_DelimitadoresSQL[$i], "",strtolower($cadena) );
        }
 
        return $cadena;
    }
 
     $mensajesAll= "";
 
    //Mensajes para el nombre
    if( estaEnBlanco($nombre) )
        $mensajesAll = "<li>Por favor, escriba su Nombre.</li>";
    if( validaTamanio($nombre,3) )
        $mensajesAll .= "<li>Su Nombre como minimo debe tener 3 caracteres.</li>";
    //Mensajes para el Apellido Paterno
    if( estaEnBlanco($apellido) )
        $mensajesAll .= "<li>Por favor, escriba su Apellido Paterno.</li>";
    if( validaTamanio($apellido,3) )
        $mensajesAll .= "<li>Su Apellido Paterno como minimo debe tener 3 caracteres.</li>";
    //Mensajes para el Apellido Materno
 //Mensajes para el Apellido Materno
    if( estaEnBlanco($direccion) )
        $mensajesAll .= "<li>Por favor, escriba su Apellido Materno.</li>";
    if( validaTamanio($direccion,3) )
        $mensajesAll .= "<li>Su Apellido Materno como minimo debe tener 3 caracteres.</li>";
    //Mensajes para el Correo electronico
    if( estaEnBlanco($correo) || validaTamanio($correo,5) || esCorreoInvalido($correo) )
        $mensajesAll .= "<li>Por favor, escriba una direccion de correo electronico valida.</li>";
	
	if( estaEnBlanco($telefono) )
        $mensajesAll .= "<li>Por favor, escriba su Apellido Materno.</li>";
    if( validaTamanio($telefono,3) )
        $mensajesAll .= "<li>Su Apellido Materno como minimo debe tener 3 caracteres.</li>";
	
    //Mensajes para el nombre de usuario
    if( estaEnBlanco($usuario) )
        $mensajesAll .= "<li>Por favor, escriba un nombre de usuario. Este dato le servira para iniciar sesion y ver el contenido.</li>";
    if( validaTamanio($usuario,5) )
        $mensajesAll .= "<li>Su nombre de usuario como minimo debe tener 5 caracteres.</li>";
    //Mensajes para el password
    if( estaEnBlanco($password) )
        $mensajesAll .= "<li>Por favor, escriba una contrase&ntilde;a.</li>";
    if( validaTamanio($password,5) )
        $mensajesAll .= "<li>Su contrase&ntilde;a como minimo debe tener 5 caracteres.</li>";
    //Mensajes para la confirmacion del password
    if( estaEnBlanco($password2) || validaTamanio($password2,5) )
        $mensajesAll .= "<li>Por favor, confirme la contrase&ntilde;a anterior.</li>";
    if( trim($password) != trim($password2) )
        $mensajesAll .= "<li>Por favor, repita la contrase&ntilde;a anterior.</li>";    
 

    $log = $mensajesAll."<br>";
 
    //Si se generaron mensajes de error al validar...
    if ( trim($mensajesAll) != "" ) {
        //..Redireccion a la pagina de registro para mostrar msg de error al usuario
        //Enviar los datos que habia escrito antes de enviar
    ?>
    <form id="frm_error"   name="frm_error" method="post" action="registro.php">
        <input type="hidden" name="error" value="1" />
        <input type="hidden" name="msgs_error" value='<?php echo $mensajesAll ?>' />
	
        <input type="hidden" name="nombre" value='<?php echo $nombre ?>' />
        <input type="hidden" name="apellido" value='<?php echo $apellido ?>' />
	<input type="hidden" name="direccion" value='<?php echo $direccion ?>' />
        <input type="hidden" name="correo" value='<?php echo $correo ?>' />
	<input type="hidden" name="telefono" value='<?php echo $telefono ?>' />
	<input type="hidden" name="usuario" value='<?php echo $usuario ?>' />
        <input type="hidden" name="password" value='<?php echo $password ?>' />
	<input type="hidden" name="password2" value='<?php echo $password2 ?>' />
    </form>
    <script type="text/javascript">
        //Redireccionar con el formulario creado
        document.frm_error.submit();
    </script>
<?php
        exit;
    }


include("conectar_bd.php");  
    conectar_bd();
    
    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
    isset($_POST['apellido']) && !empty($_POST['apellido']) &&
    isset($_POST['direccion']) && !empty($_POST['direccion']) &&
    isset($_POST['correo']) && !empty($_POST['correo']) &&
    isset($_POST['telefono']) && !empty($_POST['telefono'])&&
    isset($_POST['usuario']) && !empty($_POST['usuario'])&&
    isset($_POST['password']) && !empty($_POST['password']))
    {
		// Con esta sentencia SQL insertaremos los datos en la base de datos
		mysql_query("INSERT INTO clientes (nombre, apellido, direccion, correo, telefono, usuario, password)
		VALUES ('{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['direccion']}','{$_POST['correo']}','{$_POST['telefono']}','{$_POST['usuario']}','{$_POST['password']}')");
    }
  
 
    ?>
       <form id="frm_registro_status"   name="frm_registro_status" method="post" action="index.php">
        <input type="hidden" name="status_registro" value="1" />
    </form>
    <script type="text/javascript">
        //Redireccionar con el formulario creado
        document.frm_registro_status.submit();
    </script>
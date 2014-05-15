<?php
    session_start();
    
    if(!isset($_SESSION['valido']))
        $_SESSION['valido'] = 0;

    $varUser=$_POST['txtUser'];
    $varPass=$_POST['txtPassword'];

    $conexion = mysql_connect('localhost','root');

    if(mysql_select_db('mydb',$conexion))
        echo 'Conexion satisfactoria';
    else
        echo 'No se pudo conectar';

    $query = "SELECT * FROM clientes WHERE usuario='$varUser' AND password='$varPass' ";

    $record = mysql_query($query);

    if(mysql_num_rows($record)>0)
    {
        $_SESSION['valido']=1;
        header('location: principal.php');
    }
    else
    {
        $_SESSION['valido']=0;
        header('location: index.php');
    }

?>
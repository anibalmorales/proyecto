<?php
    session_start();
    if(!isset($_SESSION['valido']))
        $_SESSION['valido'] = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
</head>
<body>
<?php
        if($_SESSION['valido']==1)
        { 
    ?>
  <!--==============================header=================================-->
  <div class="header">
  	<div>
        <div class="subpages-nav">
            <nav>  
                <ul class="menu">
                    <li><a href="principal.php">Inicio</a></li>
                    <li><a href="mujer.php">Mujeres</a></li>
                    <li><a href="hombre.php">Hombres</a></li>
                    <li><a href="mision.php">Mision</a></li>
                    <li><a href="novedades.php">Novedades</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li class="current li-none"><a href="contactos.php">Contactos</a></li>
                </ul>
            </nav>
        </div>
    </div>
  </div>   
<!--==============================content================================-->
    <section id="content">
    	<div class="pad-1">
            <div class="page2-row1">
                <div class="col-4">
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
                    <h2>Contenido</h2>
            
                </div>
                
    <?php }
    else
        header('location: index.php');
    ?>            
</body>
</html>
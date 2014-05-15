<?php
    session_start();
    if(!isset($_SESSION['valido']))
        $_SESSION['valido'] = 0;

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>proyecto</title>
    
</head>
<body topmargin="0" >
<?php
        if($_SESSION['valido']==1)
        { 
    ?>
<table align="right" width="350px" border="0">
<tr>       
    <td  width="15px" align="center">
        <!-- Proporcionar Link para cerrar sesion -->
       <h2 class="h2 p2"><a href="cerrarSesion.php">Cerrar sesi&oacute;n</a> </h2>
    </td>
</tr>
</table>
<br /><br />

    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
  
    <script src="js/java1.js"></script>
    <script src="js/java2.js"></script>
    <script>
		$(document).ready(function(){
			$('.slider')._TMS({
				show:0,
				pauseOnHover:false,
				prevBu:false,
				nextBu:false,
				playBu:false,
				duration:700,
				preset:'fade',
				pagination:'.pags',
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,// fromLeft, fromRight, fromTop, fromBottom
				waitBannerAnimation:false,
				progressBar:false
			})
			jQuery('#mycarousel').jcarousel({
				horisontal: true,
				wrap:'circular',
				scroll:1,
				easing:'easeInOutBack',
				animation:1200
			});
		});
	</script>
</head>
<body>
  <!--==============================header=================================-->
  <div class="header">
  	<div>
        <div class="nav">
            <nav>  
                <ul class="menu">
                    <li class="current li-none"><a href="principal.php">Inicio</a></li>
                    <li><a href="mujer.php">Mujeres</a></li>
                    <li><a href="hombre.php">Hombres</a></li>
                    <li><a href="mision.php">Mision</a></li>
                    <li><a href="novedades.php">Novedades</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="contactos.php">Contactos</a></li>
                </ul>
            </nav>
      </div>
        <div id="slide">		
            <div class="slider">
                <ul class="items">
                    <li><img src="images/index1.jpg" alt="" /></li>
                    <li><img src="images/index2.jpg" alt="" /></li>
                    <li><img src="images/index3.jpg" alt="" /></li>
                    <li><img src="images/index4.jpg" alt="" /></li>
                    <li><img src="images/index5.jpg" alt="" /></li>
                </ul>
            </div>
            <ul class="pags">
                <li><a href="#"><strong>0</strong>1</a></li>
                <li><a href="#"><strong>0</strong>2</a></li>
                <li><a href="#"><strong>0</strong>3</a></li>
                <li><a href="#"><strong>0</strong>4</a></li>
                <li><a href="#"><strong>0</strong>5</a></li>
            </ul>	
        </div>
    </div>
  </div>   
    <footer>
        <span><strong>2014 UMG</strong><br>
    </footer>
    <?php }
    else
        header('location: index.php');
    ?>	           
<body>
</html>
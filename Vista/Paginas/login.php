<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");
$uri = $client->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/StyleBody.css">
	<link rel="stylesheet" type="text/css" href="../../css/styleResponsive.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/login.css">
    <link rel="stylesheet" href="../../css/footer.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="conjunto">

        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Tumnus Shopp</h3>
                <strong>TS</strong>
            </div>
    
            <ul class="list-unstyled components">
                <li class="active">
                    <div class="home-Submenu">
                        <a href="../Plantilla.php?Paginas=plantilla" >
                            <i class="fas fa-home"></i>
                                <p>Inicio</p>
                        </a>
                    </div>					
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        <p>Categorias</p>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="../Paginas/damas.php?Paginas=damas">
                                <h5>Damas</h5>
                            </a>
                        </li>
                        <li>
                        </li>
                        <li>
                            <a href="../Paginas/caballeros.php?Paginas=caballeros">
                                <h7>Caballeros</h7>
                            </a>
                        </li>
                        <li>
                            <a href="../Paginas/kids.php?Paginas=kids">
                                <h5>Niños</h5>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../Paginas/login.php?login">
                        <i class="fas fa-address-card"></i>
                        <p>Iniciar sesion</p>
                    </a>
                </li>
                <li>
                    <a href="../Paginas/acercade.php?acerca">
                        <i class="fas fa-question"></i>
                        <p>Acerca de</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-cart-plus"></i>
                        <p>Carrito de compras</p>
                    </a>
                </li>    
            </ul>        
        </nav>
        <button type="button" id="sidebarCollapse" class="btn btn-dark btn-info">
                <i class="fas fa-align-justify"></i>
        </button>
        <div class="login-info-container-btn">            
            <div class="login-bar">
                <div class="login-container">
                    <div class="login-info-container">
                        <h1 class="title">Iniciar sesion</h1>
                        <form class="inputs-container" method="post"> 
                            <input class="input" type="text" placeholder="Usuario">
                            <input class="input" type="password" placeholder="Contraseña">
                            <p class="parrafoFormulario"> ¿Olvido la contraseña?<span class="span">  Click aquí</span></p>
                            <button class="btn">Iniciar sesion</button>
                            <p class="parrafoFormulario">¿No esta registrado?<span class="span">  Registrarse</span></p>
                            <p>
                                <hr width="75%" size="50" color="#FF00FF">
                            </p>                              
                            <?php                    
                            // echo '<button class="btnGoogle" href="../Paginas/damas.php?Paginas=damas"><img src="../../img/logo-googleblack.png" id="imgGoogle">Entrar con Google</button>';
                            echo "<a href='".$uri."' class='btnGoogle'><img src='../../img/logo-googleblack.png' id='imgGoogle'>Entrar con Google</a>";
                            ?>                      
                        </form> 
                    </div>
                    <div class="image-container">
                        <img src="../../img/img_login.jpg" alt="login">   
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<!-- Popper.JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
	<script type="text/javascript">
		$(document).ready(function () {
			$('#sidebarCollapse').on('click', function () {
				$('#sidebar').toggleClass('active');
			});
		});
        
        function abrirActualizar() {
            $('#Agregar').modal('show');
        }


        function abrirActualizar2() {
        	$('#Agregar2').modal('show');
        }
        function abrirActualizar3() {
        	$('#Agregar3').modal('show');
        }
		
	</script>
    <script>
        
    </script>

	<footer>       
        <div class="container-footer-all">         
             <div class="container-body"> 
                 <div class="colum1">
                     <h1>Mas informacion de la compañia</h1> 
                     <p>Tumnus es una agencia de ventas que muestra sus imnovadores productos a sus clientes .</p> 
                 </div>
 
                 <div class="colum2">
                     <h1>Redes Sociales</h1>
                     <div class="row">
                         <img src="../../img/facebook.png">
                         <label><a href="https://www.facebook.com/willian.reyes.71">Siguenos en Facebook</label></a>
                     </div>
                     <div class="row">
                         <img src="../../img/instagram.png">
                         <label><a href="https://www.instagram.com/jeff_elmajo/?hl=es">Siguenos en Instagram</label></a>
                     </div>                      
                 </div>

                 <div class="colum3">
                     <h1>Informacion Contactos</h1> 
                     <div class="row2">
                         <img src="../../img/house.png">
                         <label>Ciudadela Don Bosco, Soyapango, San Salvador.</label>
                     </div> 
                     <div class="row2">
                         <img src="../../img/smartphone.png">
                         <label>+503 7136-4955</label>
                     </div>
                     <div class="row2">
                         <img src="../../img/contact.png">
                          <label>tumnus@gmail.com</label>
                     </div>
 
                 </div> 
             </div>         
         </div>
         
         <div class="container-footer">
                <div class="footer">
                     <div class="copyright">
                         © 2021 Todos los Derechos Reservados | <a href="">Tumnus</a>
                     </div> 
                     <div class="information">
                         <a href="acerca.html">Acerca de</a> | <a href="home.html">Categorias</a> 
                     </div>
                 </div> 
        </div>
         
     </footer>
</body>

</html>
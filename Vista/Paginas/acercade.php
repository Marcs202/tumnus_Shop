<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Acerca de nosotros</title>
	<!-- Bootstrap CSS CDN         -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../../css/StyleBody.css">
	<link rel="stylesheet" type="text/css" href="../../css/styleResponsive.css">
	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

	<div class="wrapper">
		<!-- Sidebar  -->
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
                    <a href="../Paginas/carrito.php?carrito">
                        <i class="fas fa-cart-plus"></i>
                        <p>Carrito de compras</p>
                    </a>
                </li>
    
            </ul>
    
    
        </nav>


         <?php 

          if(isset($_GET["Paginas"])){

            if($_GET["Paginas"] == "plantilla"||
              $_GET["Paginas"] == "kids" ||
              $_GET["Paginas"] == "damas" ||
              $_GET["Paginas"] == "caballeros" ||
               $_GET["Paginas"] == "login" ||
               $_GET["Paginas"] == "acerca" ||
               $_GET["Paginas"] == "carrito" )  {

              
          }
          else {
            include "Vista/Paginas/error404.php";
          }

        }else
        {


        }

        ?>



		<!-- Page Content  -->
		<div id="content">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<button type="button" id="sidebarCollapse" class="btn btn-dark btn-info">
						<i class="fas fa-align-justify"></i>
						
					</button>
					<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-search"></i>	
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item active">

								<a class="nav-link" href="">Instagram</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Facebook</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Twiter</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<header>
				<h2>Tu pones el estilo!</h2>
			</header>
			<section id="caja">
				<div id="galeria">
					<div class="cel">
						<h1>Quienes Somos</h1>
						<img src="../../img/somos.png" alt="img circle" width="200" height="200" onclick="abrirActualizar1()" >
						<p><p class="btn btn-info" onclick="abrirActualizar1()">Ver detalles</a></p></p>
					</div>
					<div class="cel">
						<h1>Nuestra Mision</h1>
						<img src="../../img/misi.png" alt="imagen circle" width="200" height="200" onclick="abrirActualizar2()" >
						<p><p class="btn btn-info" onclick="abrirActualizar2()"> Ver detalles</a></p></p>
					</div>
					<div class="cel">
						<h1>Nuestra Vision</h1>
						<img src="../../img/visi.png" alt="imagen responsive" width="200" height="200" onclick="abrirActualizar3()" >
						<p><p class="btn btn-info" onclick="abrirActualizar3()">Ver detalles</a></p></p>


					</div>
					<div class="cel">
						<h1>Nuestra Direccion</h1>

						<img src="../../img/dire.png" alt="imagen responsive" width="200" height="200" onclick="abrirActualizar4()" >
						<p><p class="btn btn-info" onclick="abrirActualizar4()">Ver detalles</a></p></p>


					</div>
					<div class="cel">
						<h1>Nuestro Contacto</h1>

						<img src="../../img/conta.png" alt="imagen responsive" width="200" height="200" onclick="abrirActualizar5()">
						<p><p class="btn btn-info" onclick="abrirActualizar5()">Ver detalles</a></p></p>


					</div>
					<div class="cel">
						<h1>Nuestro Horarios</h1>
						<img src="../../img/hora.png" alt="imagen responsive" width="200" height="200" onclick="abrirActualizar6()" >
						<p><p class="btn btn-info"onclick="abrirActualizar6()">Ver detalles</a></p></p>
					</div>
					

				</div>		
			</section>

		</section>

		<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
			  	<div class="modal-body">
					<div class="form-group">
						<center><h4>Quienes Somos</h4></center>
						<div class="texto" style="padding-top: 5%;">
						  <center><p><h5>« Tumnus Shopp es una agencia de ventas que muestra sus imnovadores productos a sus clientes
							     »</h5> </p></center>
						  </div>
				  </div></form>
			  </div>
			</div>
		  </div>
		</div>
		  <div class="modal fade" id="Agregar2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
				  	<div class="modal-body">
						<div class="form-group">
							<center><h4>Nuestra Mision</h4></center>
						<div class="texto" style="padding-top: 5%;">
					<center><p><h5>« Crear la mejor plataforma de ventas ofreciendo la mejor calidad, variedad y 
						servicio a los clientes »</h5> </p></center>
					</div>
				</div>
			</form>
		</div>
	</div>
		  </div>
		</div>
		<div class="modal fade" id="Agregar3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
		  
					
		  
						  </div>
				  <div class="modal-body">
					<div class="form-gro qup">
						<center><h4>Nuestra Vision</h4></center>
						
		  
				  <div class="texto" style="padding-top: 5%;">
					<center><p><h5>« Ofrecer la mejor experiencia para nuestros clientes dia a dia »</h5> </p></center>
					</div>
		  
		  
				  </div>
				 
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<div class="modal fade" id="Agregar4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
		  
					
		  
						  </div>
				  <div class="modal-body">
					<div class="form-group">
						<center><h3>Nuestra Direccion</h3></center>
						
		  
						<div class="texto" style="padding-top: 5%;">
						  <center><p><h4>Nos pueden encontrar en el siguiente lugar: </h4> </p></center>
						  <center><p><h5>Col Lincoln Cl Castro Morán 7 - 5 </h5></p> </center>
						  
						  </div>
		  
		  
				  </div>
				 
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<div class="modal fade" id="Agregar5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
		  
					
		  
						  </div>
				  <div class="modal-body">
					<div class="form-group">
						  <center><h3>Nuestro Contacto</h3></center>
						
		  
				  <div class="texto" style="padding-top: 5%;">
					<center><p><h5>Nos Puede contactar por los siguientes numeros de telefono:</h5> </p></center>
					<p><center><h6>Telefono Fijo: </h6> <h7> 2230-2750 </h7></p></center>
					<p><center><h6>Telefono Celular: </h6> <h7> 7840-3090 </h7></p></center>
					</div>
		  
		  
				  </div>
				 
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<div class="modal fade" id="Agregar6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <form class="p-6 bg-light" method="post">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
					
		  
					
		  
						  </div>
				  <div class="modal-body">
					<div class="form-group">
						<center><h3>Nuestros Horarios</h3></center>
						
		  
				  <div class="texto" style="padding-top: 5%;">
					<center><p><h5>Nos pueden encontrar en los siguientes horarios: </h7> </p></center>
						  <p><center><h6>Lunes: </h6> <h7> 6:00 Am --- 9:30 Pm </h7></p></center>
						  <p><center><h6>Martes: </h6> <h7> 6:30 Am --- 9:00 Pm </h7></p></center>
						  <p><center><h6>Miercoles: </h6> <h7> 7:00 Am --- 9:30 Pm </h7></p></center>
						  <p><center><h6>Jueves: </h6> <h7> 7:30 Am --- 9:00 Pm </h7></p></center>
						  <p><center><h6>Viernes: </h6> <h7> 8:00 Am --- 9:30 Pm </h7></p></center>
						  <p><center><h6>Sabado: </h6> <h7> 8:30 Am --- 2:30 Pm </h7></p></center>
						  <p><center><h6>Domingo: </h6> <h7> 9:00 Am --- 4:30 Pm </h7></p></center>
					</div>
		  
		  
				  </div>
				 
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<!-- jQuery CDN - Slim version (=without AJAX) -->
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
			function abrirActualizar1() {
    	$('#Agregar').modal('show');
			}
			function abrirActualizar2() {
  		 $('#Agregar2').modal('show');
  			}
			  function abrirActualizar3() {

   		$('#Agregar3').modal('show');
	 		}
	 		  function abrirActualizar4() {
   
   		$('#Agregar4').modal('show');
	  		}
			  function abrirActualizar5() {
   
   		$('#Agregar5').modal('show');
	 		}
			 function abrirActualizar6() {
   
  		$('#Agregar6').modal('show');
	  		}

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
							 <a href="acerca.html">Acerca de</a> | <a href="home.html">HOME</a> 
						 </div>
					 </div> 
				 </div>
			 
		 </footer>
	</body>

	</html>

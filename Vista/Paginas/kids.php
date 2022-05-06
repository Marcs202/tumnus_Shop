<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TUMNUS|HOME</title>
	<!-- Bootstrap CSS CDN         -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="../../css/footer.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/StyleBody.css">
	<link rel="stylesheet" type="text/css" href="../../css/styleResponsive.css">
	<link rel="stylesheet" href="../../css/sweetalert2.min.css">


	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


	
	<meta charset="UTF-8">
	<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<script src="../../js/popper.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


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

		<!-- Page Content  -->
		<div id="content">

			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">

					<button type="button" id="sidebarCollapse" class="btn btn-dark btn-info">
						<i class="fas fa-align-justify"></i>
						<span>MENU</span>
					</button>
					<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fas fa-search"></i>	
					</button>  

					<div class="collapse navbar-collapse" id="navbarCollapse">
									<ul class="navbar-nav mr-auto">
										<li class="nav-item dropdown">
											<img src="../../img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
											width="70px" href="#"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
											aria-expanded="true"></img>
											<div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
												<table id="lista-carrito" class="table">
													<thead>
														<tr>
															<th>Imagen</th>
															<th>Nombre</th>
															<th>Precio</th>
															<th></th>
														</tr>
													</thead>
													<tbody></tbody>
												</table>

												<a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
												
											</div>
										</li>
									</ul>


					<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="nav navbar-nav ml-auto">



							<li class="nav-item">




								</li>


							</ul>
						</div>
					</div>
				</nav>
				
		<section id="caja"> 

					<div id="galeria">
						
						<div class="cel">
							<h2>Camiseta casual</h2>
							<img src="../../img/camisetaCaballero.jpg" alt="img circle" width="200" height="200" style="padding-bottom: 5%;" >
							<p class="btn btn-info" onclick="abrirActualizar()">Ver detalles</a></p>
						</div>
						<div class="cel">
							<h2>Camiseta</h2>
							<img src="../../img/camiseta2.jpg" alt="imagen rounded" width="200" height="200" style="padding-bottom: 5%;">
							<p class="btn btn-info" onclick="abrirActualizar2()">Ver detalles</a></p>
						</div>
						<div class="cel">
							<h2>Chaqueta</h2>
							<img src="../../img/outfitXD.jpg" alt="imagen responsive" width="200" height="200" style="padding-bottom: 5%;" >
							<p class="btn btn-info" onclick="abrirActualizar3()">Ver detalles</a></p>
						</div>
						<div class="cel">
							<h2>Sueter</h2>
							<img src="../../img/Sueter.jpg" alt="img circle" width="200" height="200" style="padding-bottom: 5%;" >
							<p class="btn btn-info" onclick="abrirActualizar4()">Ver detalles</a></p>
						</div>
						<div class="cel">
							<h2>zapatillas de vestir</h2>
							<img src="../../img/zapatoVestir.jpg" alt="imagen rounded" width="200" height="200" style="padding-bottom: 5%;" >
							<p class="btn btn-info" onclick="abrirActualizar5()">Ver detalles</a></p>
						</div>
						<div class="cel">
							<h2>zapato de futbol</h2>

							<img src="../../img/zapatoFutbol.jpg" alt="imagen responsive" width="200" height="200" style="padding-bottom: 5%;" >
							<p class="btn btn-info" onclick="abrirActualizar6()">Ver detalles</a></p>
						</div>


						
						
					</div>		
				</section>

				  <?php 

          if(isset($_GET["Paginas"])){

            if($_GET["Paginas"] == "plantilla"||
              $_GET["Paginas"] == "kids" ||
              $_GET["Paginas"] == "puestos_trabajo" ||
              $_GET["Paginas"] == "plazas")  {

              
          }
          else {
            include "Vista/Paginas/error404.php";
          }

        }else
        {


        }




        ?>







				<div class="container" id="lista-productos">

					<!-- modal 1 -->
					<div class="modal fade" id="Agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<form class="p-6 bg-light" method="post">
								<div class="modal-content">
									<div class="modal-header">


										<div class="card-deck mb-3 text-center">

											<div class="card mb-4 shadow-sm">
												<div class="card-header">
													<h4 class="my-0 font-weight-bold">CAMISETA</h4>
												</div>
												<div class="card-body">
													<img src="../../img/camisa_fresh.jpg" class="card-img-top">
													<h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>

													<ul class="list-unstyled mt-3 mb-4">
													
													</ul>
													<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
													<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
												</div>
												<div class="texto" style="padding-top: 5%;">
													<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>






					<!-- modal 2 -->
					<div class="modal fade" id="Agregar2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<form class="p-6 bg-light" method="post">
								<div class="modal-content">
									<div class="modal-header">


										<div class="card-deck mb-3 text-center">

											<div class="card mb-4 shadow-sm">
												<div class="card-header">
													<h4 class="my-0 font-weight-bold">CAMISETA</h4>
												</div>
												<div class="card-body">
													<img src="../../img/camisa_fresh.jpg" class="card-img-top">
													<h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>

													<ul class="list-unstyled mt-3 mb-4">
													
													</ul>
													<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
													<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
												</div>
												<div class="texto" style="padding-top: 5%;">
													<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
												</div>
											</div>
										</div>

									</div>
								</div>
							</button>
						</div>
					</form>
				</div>


				<!-- modal 3 -->
				<div class="modal fade" id="Agregar3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<form class="p-6 bg-light" method="post">
							<div class="modal-content">
								<div class="modal-header">



									<div class="card-deck mb-3 text-center">

										<div class="card mb-4 shadow-sm">
											<div class="card-header">
												<h4 class="my-0 font-weight-bold">CAMISETA</h4>
											</div>
											<div class="card-body">
												<img src="../../img/camisa_fresh.jpg" class="card-img-top">
												<h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>

												<ul class="list-unstyled mt-3 mb-4">
												
												</ul>
												<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
												<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
											</div>
											<div class="texto" style="padding-top: 5%;">
												<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</button>
					</div>
				</form>
			</div>





			<!-- Prueba -->

			<!-- modal 4 -->
			<div class="modal fade" id="Agregar4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<form class="p-6 bg-light" method="post">
						<div class="modal-content">
							<div class="modal-header">



								<div class="card-deck mb-3 text-center">

									<div class="card mb-4 shadow-sm">
										<div class="card-header">
											<h4 class="my-0 font-weight-bold">CAMISETA</h4>
										</div>
										<div class="card-body">
											<img src="../../img/camisa_fresh.jpg" class="card-img-top">
											<h1 class="card-title pricing-card-title precio">S/. <span class="">30</span></h1>

											<ul class="list-unstyled mt-3 mb-4">

											</ul>
											<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
											<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
										</div>
										<div class="texto" style="padding-top: 5%;">
											<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</button>
				</div>
			</form>
		</div>








		<!-- modal 5 -->
		<div class="modal fade" id="Agregar5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form class="p-6 bg-light" method="post">
					<div class="modal-content">
						<div class="modal-header">
							


							<div class="card-deck mb-3 text-center">

								<div class="card mb-4 shadow-sm">
									<div class="card-header">
										<h4 class="my-0 font-weight-bold">CAMISETA</h4>
									</div>
									<div class="card-body">
										<img src="../../img/camisa_fresh.jpg" class="card-img-top">
										<h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>

										<ul class="list-unstyled mt-3 mb-4">
											
										</ul>
										<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
										<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
									</div>
									<div class="texto" style="padding-top: 5%;">
										<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</button>
			</div>
		</form>
	</div>




	<!-- modal 6 -->
	<div class="modal fade" id="Agregar6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form class="p-6 bg-light" method="post">
				<div class="modal-content">
					<div class="modal-header">



						<div class="card-deck mb-3 text-center">

							<div class="card mb-4 shadow-sm">
								<div class="card-header">
									<h4 class="my-0 font-weight-bold">CAMISETA</h4>
								</div>
								<div class="card-body">
									<img src="../../img/camisa_fresh.jpg" class="card-img-top">
									<h1 class="card-title pricing-card-title precio">S/. <span class="">5000</span></h1>

									<ul class="list-unstyled mt-3 mb-4">
										
									</ul>
									<a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
									<button type="button" class="btn btn-block btn-secondary" data-dismiss="modal">Close</button>
								</div>
								<div class="texto" style="padding-top: 5%;">
									<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</button>
		</div>
	</form>
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

	function abrirActualizar() {
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
		<script src="js/splash.js"></script>
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
						<a href="acerca.html">Acerca de</a> | <a href="">HOME</a> 
					</div>
				</div> 
			</div>


		</footer>

	</div>
</div>
<script src="../../js/sideBar.js"></script>    


<script src="../../js/sweetalert2.min.js"></script>
<script src="../../js/carrito.js"></script>
<script src="../../js/pedido.js"></script>
<script type="text/javascript" src="../../js/popper.min.js"></script>
</body>
</html>
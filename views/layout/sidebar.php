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

<!-- BARRA LATERAL -->
<aside id="lateral">

	<div id="carrito" class=" contenedor-menu">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = Utils::statsCarrito(); ?>
			<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?> $</a></li>
			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
		</ul>
	</div>
	
	<div id="login" class=" ">
		
		<?php if(!isset($_SESSION['identity'])): ?>
			<h3>Entrar a la web</h3>
			<form action="<?=base_url?>usuario/login" method="post">
				<label for="email">Email</label>
				<input type="email" name="email" />
				<label for="password">Contraseña</label>
				<input type="password" name="password" />
				<input class="btn" type="submit" value="Ingresar" /><br>		
				<a href="<?=$uri?>" class='btnGoogle'><img src='assets/img/logo-googleblack.png' id='imgGoogle'>Log in</a>				
			</form>
		<?php else: ?>
			<h3><?=$_SESSION['identity']->Nombre?> <?=$_SESSION['identity']->Apellidos?></h3>			
		<?php endif; ?>		
		

		<ul>
			<?php if(isset($_SESSION['admin'])): ?>
				<li><a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
				<li><a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
				<li><a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
			<?php endif; ?>
			
			<?php if(isset($_SESSION['identity'])): ?>
				<li><a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
				<li><a href="<?=base_url?>usuario/logout">Cerrar sesión</a></li>
			<?php else: ?> 
				<li><a href="<?=base_url?>usuario/registro">Registrate aqui</a></li>
			<?php endif; ?> 
		</ul>
	</div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">
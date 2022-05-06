<h1>Algunos de nuestros productos</h1>

<?php while($product = $productos->fetch_object()): //recoremos la tabla con el while y verificamos que sea un object?>
	<div class="product">
		<a href="<?=base_url?>producto/ver&id=<?=$product->id //llamamos el id del producto?>">
			<?php if($product->imagen != null): //esta condicion verifica si el producto tiene imagen si no la tiene muestra la imagen por default que esta en el else ?>
				<img src="<?=base_url?>uploads/images/<?=$product->imagen //llamamos la imagen?>" />
			<?php else: ?>
				<img src="<?=base_url?>assets/img/camiseta.png" />
			<?php endif; ?>
			<h2><?=$product->nombre?></h2>
		</a>
		<p><?=$product->precio?></p>
		<a href="<?=base_url?>carrito/add&id=<?=$product->id//pasamos el id de nuestro producto al carrito?>" class="button">Comprar</a>
	</div>
<?php endwhile; ?>

<?php if (isset($categoria)): //comprobamos si existe la categoria ?>
	<h1><?= $categoria->nombre //concatenamos el nombre?></h1>
	<?php if ($productos->num_rows == 0): //si no hay productos en la categoria ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>

		<?php while ($product = $productos->fetch_object()): //recoremos la tabla ?>
			<div class="product">
				<a href="<?= base_url ?>producto/ver&id=<?= $product->id ?>">
					<?php if ($product->imagen != null): //valida si el producto no tiene img?>
						<img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" />
					<?php else: //si no hay imagen envia esa por default?>
                                                
						<img src="<?= base_url //convertimos la img en un enlace?>assets/img/camiseta.png" />
					<?php endif; ?>
					<h2><?= $product->nombre ?></h2>
				</a>
				<p><?= $product->precio ?></p>
				<a href="<?=base_url?>carrito/add&id=<?=$product->id?>" class="button">Comprar</a>
			</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>

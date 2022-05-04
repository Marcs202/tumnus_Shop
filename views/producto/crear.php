<?php if(isset($edit) && isset($pro) && is_object($pro))://si la variable edit trae datos y es un objeto ?>
	<h1>Editar producto <?=$pro->nombre?></h1><!-- se concatena el nombre del producto -->
	<?php $url_action = base_url."producto/save&id=".$pro->id;//se manda al controlador producto/save ?>
	
<?php else: ?>
	<h1>Crear nuevo producto</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
	
<div class="form_container">
	
	<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : '';//rellenamos los input con la informacion de la tabla ?>"/>

		<label for="descripcion">Descripción</label>
		<textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); //referenciamos a nuestra clase para que recora el id?>
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()): //recoremos la tabla con el while ?>
                                    <!-- pasamos el id de la categoria y luego verificamos si el id que trae $pro es un objeto y si los 2 id son iguales hacemos un select  -->
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre //pasamos el nombre de la categoria?>
				</option>
			<?php endwhile; ?>
		</select>
		
		<label for="imagen">Imagen</label>
                
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): //verificamos que $pro no este vacia y sea un objeto y que la imagen sea distinta de null ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen //pasamos la imagen ?>" class="thumb"/> 
		<?php endif; ?>
		<input type="file" name="imagen" />
		
		<input type="submit" value="Guardar" />
	</form>
</div>
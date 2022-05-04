<?php
require_once 'models/producto.php';

class carritoController{
	
	public function index(){
		if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1){
			$carrito = $_SESSION['carrito'];
		}else{
			$carrito = array();
		}
		require_once 'views/carrito/index.php';
	}
	
	public function add(){
		if(isset($_GET['id'])){//comprobamos si existe el id del producto
			$producto_id = $_GET['id'];//guardamos ese id
		}else{
			header('Location:'.base_url);//enviamos al index
		}
		
		if(isset($_SESSION['carrito'])){//comprobamos si existe la session 
			$counter = 0;//contador
			foreach($_SESSION['carrito'] as $indice => $elemento){//hacemos un foreach donde obtenemos un elemento del carrito
				if($elemento['id_producto'] == $producto_id){//si el elemento obtenido en el foreach es igual al id 
					$_SESSION['carrito'][$indice]['unidades']++; //aumentamos en 1 unidad los productos en el carrito
					$counter++;
				}
			}	
		}
		
		if(!isset($counter) || $counter == 0){
			// Conseguir producto
			$producto = new Producto();//instanciamos la clase
			$producto->setId($producto_id);//setiamos el dato
			$producto = $producto->getOne();//sacamos solo 1 producto

			// Añadir al carrito
			if(is_object($producto)){//comprobamos si es un objeto
				$_SESSION['carrito'][] = array(//creamos un array donde se guardaran los datos
					"id_producto" => $producto->id,//pasamos el id
					"precio" => $producto->precio,//el precio
					"unidades" => 1,//la cantidad de unidades
					"producto" => $producto//agregamos el producto completo
				);
			}
		}
		
		header("Location:".base_url."carrito/index");//redireccioamos al carrito
	}
	
	public function delete(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			unset($_SESSION['carrito'][$index]);
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function up(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']++;
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function down(){
		if(isset($_GET['index'])){
			$index = $_GET['index'];
			$_SESSION['carrito'][$index]['unidades']--;
			
			if($_SESSION['carrito'][$index]['unidades'] == 0){
				unset($_SESSION['carrito'][$index]);
			}
		}
		header("Location:".base_url."carrito/index");
	}
	
	public function delete_all(){
		unset($_SESSION['carrito']);//con el unset eliminamos los datos de una variable en este caso el array
		header("Location:".base_url."carrito/index");//redireccionamos al carrito
	}
	
}
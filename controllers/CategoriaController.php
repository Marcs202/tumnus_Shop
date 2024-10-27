<?php
require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{
	
	public function index(){
		Utils::isAdmin(); //verificamos que nuestro user se admin
		$categoria = new Categoria();
		$categorias = $categoria->getAll();//instanciamos nuestra categoria
		
		require_once 'views/categoria/index.php';
	}
	
	public function ver(){
		if(isset($_GET['id'])){
			$id = $_GET['id'];//guardmos nuestro id
			
			// Conseguir categoria
			$categoria = new Categoria();//instanciamos
			$categoria->setId($id);//seteamos el id
			$categoria = $categoria->getOne();//y lo pasamos de nuestra funcion getOne
			
			// Conseguir productos;
			$producto = new Producto();// la misma logica que de las categorias
			$producto->setCategoria_id($id);
			$productos = $producto->getAllCategory();
		}
		
		require_once 'views/categoria/ver.php';
	}
	
	public function crear(){
		Utils::isAdmin();
		require_once 'views/categoria/crear.php';
		
	}
	
	public function save(){
		Utils::isAdmin();
	    if(isset($_POST) && isset($_POST['nombre'])){
			// Guardar la categoria en bd
			$categoria = new Categoria();
			$categoria->setNombre($_POST['nombre']);
			$save = $categoria->save();
		}
		header("Location:".base_url."categoria/index");
	}
	
}
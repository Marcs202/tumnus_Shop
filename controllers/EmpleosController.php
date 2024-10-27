<?php
require_once 'models/empleo.php';
class EmpleosController {

    // Método para listar todos los empleos
    public function lista() {
        $empleoModel = new Empleos();
        $empleos = $empleoModel->ListarEmpleos(); // Guardamos el resultado en la variable $empleos
        require_once 'views/empleados/lista.php';
    }
      
    
    // Método para mostrar el formulario de creación
    public function crear() {
        require_once dirname(__FILE__) . '/../views/empleados/crear.php';
    }
    
    

    // Método para guardar un empleo nuevo
    public function store() {
        $nombreEmpleo = $_POST['nombreEmpleo'];
        $descripcionEmpleo = $_POST['descripcionEmpleo'];

        $empleoModel = new Empleos();
        $empleoModel->crear($nombreEmpleo, $descripcionEmpleo);

        header("Location: " . base_url . "empleos/lista");
    }

    // Método para mostrar el formulario de edición
 public function editar() {
    $id = $_GET['id']; // Obtiene el ID del empleo desde la URL
    $empleoModel = new Empleos();
    $empleo = $empleoModel->getById($id); // Llama al modelo para obtener los datos del empleo
    require_once 'views/empleados/edit.php'; // Muestra la vista de edición
}


    // Método para actualizar un empleo
    public function update() {
        $id = $_POST['id']; // Obtiene el ID del formulario
        $nombreEmpleo = $_POST['nombreEmpleo'];
        $descripcionEmpleo = $_POST['descripcionEmpleo'];
    
        $empleoModel = new Empleos();
        $empleoModel->update($id, $nombreEmpleo, $descripcionEmpleo);
    
        header("Location: " . base_url . "empleos/lista");
    }
    

    public function delete() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $empleoModel = new Empleos();
            $empleoModel->delete($id);
        }
    
        header("Location: " . base_url . "empleos/lista");
    }
    
}
?>

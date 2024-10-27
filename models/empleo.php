<?php
require_once 'config/db.php'; // Asegúrate de incluir el archivo de conexión

class Empleos {
    private $db;
    private $id;
    private $nombreEmpleo;
    private $descripcionEmpleo;

    public function __construct() {
        $this->db = Database::connect(); // Llama a la conexión desde tu clase Database
    }

    // Métodos getter
    public function getId() {
        return $this->id;
    }

    public function getNombreEmpleo() {
        return $this->nombreEmpleo;
    }

    public function getDescripcionEmpleo() {
        return $this->descripcionEmpleo;
    }

    // Métodos setter
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombreEmpleo($nombreEmpleo) {
        $this->nombreEmpleo = $nombreEmpleo;
    }

    public function setDescripcionEmpleo($descripcionEmpleo) {
        $this->descripcionEmpleo = $descripcionEmpleo;
    }

    // Método para listar todos los empleos
    public function ListarEmpleos() {
        $sql = "SELECT * FROM empleos";
        $result = $this->db->query($sql);
        return $result;
    }

    // Método para obtener un empleo específico por ID
    public function getById($id) {
        $sql = "SELECT * FROM empleos WHERE id = $id";
        $result = $this->db->query($sql);
        $empleo = $result->fetch_object();
        
        // Asignar valores a las propiedades
        if ($empleo) {
            $this->setId($empleo->id);
            $this->setNombreEmpleo($empleo->nombreEmpleo);
            $this->setDescripcionEmpleo($empleo->descripcionEmpleo);
        }
        
        return $empleo;
    }

    // Método para crear un nuevo empleo
    public function crear($nombreEmpleo, $descripcionEmpleo) {
        $sql = "INSERT INTO empleos (nombreEmpleo, descripcionEmpleo) VALUES ('$nombreEmpleo', '$descripcionEmpleo')";
        if ($this->db->query($sql)) {
            echo "El empleo se ha guardado correctamente.";
            return true;
        } else {
            echo "Hubo un error al guardar el empleo.";
            return false;
        }
    }
    
    // Método para actualizar un empleo
    public function update($id, $nombreEmpleo, $descripcionEmpleo) {
        $sql = "UPDATE empleos SET nombreEmpleo='$nombreEmpleo', descripcionEmpleo='$descripcionEmpleo' WHERE id=$id";
        return $this->db->query($sql);
    }

    // Método para eliminar un empleo
    public function delete($id) {
        $sql = "DELETE FROM empleos WHERE id = $id";
        return $this->db->query($sql);
    }
}
?>

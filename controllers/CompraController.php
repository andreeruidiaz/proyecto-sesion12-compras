<?php
require_once "models/Compra.php";
require_once "config/database.php";

class CompraController {
    private $compra;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->compra = new Compra($db);
    }

    public function registrarCompra($data) {
        $this->compra->nombre = $data['nombre'];
        $this->compra->dni = $data['dni'];
        $this->compra->producto = $data['producto'];
        $this->compra->precio_unitario = $data['precio_unitario'];
        $this->compra->cantidad = $data['cantidad'];
        return $this->compra->registrarCompra();
    }

    public function mostrarCompras() {
        // Obtener todas las compras desde el modelo
        $compras = $this->compra->obtenerCompras();
        // Pasar los datos a la vista
        return $compras;  // Devolver las compras al controlador
    }
    
}
?>

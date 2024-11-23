<?php
class Compra {
    private $conn;
    private $table_name = "compras";

    public $id;
    public $nombre;
    public $dni;
    public $producto;
    public $precio_unitario;
    public $cantidad;
    public $precio_total;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function registrarCompra() {
        $query = "INSERT INTO " . $this->table_name . " SET 
                    nombre=:nombre, dni=:dni, producto=:producto, 
                    precio_unitario=:precio_unitario, cantidad=:cantidad,
                    precio_total=:precio_total";
        $stmt = $this->conn->prepare($query);

        $this->precio_total = $this->precio_unitario * $this->cantidad;
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":dni", $this->dni);
        $stmt->bindParam(":producto", $this->producto);
        $stmt->bindParam(":precio_unitario", $this->precio_unitario);
        $stmt->bindParam(":cantidad", $this->cantidad);
        $stmt->bindParam(":precio_total", $this->precio_total);

        return $stmt->execute();
    }

    public function obtenerCompras() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY id DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>

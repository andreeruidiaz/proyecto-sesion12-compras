<?php

require_once "fpdf/fpdf.php";
require_once "controllers/CompraController.php";

$controller = new CompraController();


if (isset($_GET['action']) && $_GET['action'] == 'registrar' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST;
    $controller->registrarCompra($data);
}


$compras = [];


if (isset($_GET['view']) && $_GET['view'] == 'compras_registradas') {
    
    $compras = $controller->mostrarCompras();
}

if (isset($_GET['action']) && $_GET['action'] == 'generar_pdf') {
    $compras = $controller->mostrarCompras();
    
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 12);
    
    
    $pdf->SetLeftMargin(10); 
    $pdf->SetRightMargin(10); 
    
    
    $pdf->Cell(0, 10, utf8_decode("Reporte de Compras"), 0, 1, 'C');
    $pdf->Ln(5);  
    
    
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(30, 10, "Nombre", 1, 0, 'C');
    $pdf->Cell(30, 10, "DNI", 1, 0, 'C');
    $pdf->Cell(40, 10, "Producto", 1, 0, 'C');
    $pdf->Cell(30, 10, "P/U", 1, 0, 'C');
    $pdf->Cell(30, 10, "Cantidad", 1, 0, 'C');
    $pdf->Cell(30, 10, "Total", 1, 1, 'C'); 
    
    
    $pdf->SetFont('Arial', '', 10);
    foreach ($compras as $compra) {
        $pdf->Cell(30, 10, utf8_decode($compra['nombre']), 1, 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($compra['dni']), 1, 0, 'C');
        $pdf->Cell(40, 10, utf8_decode($compra['producto']), 1, 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($compra['precio_unitario']), 1, 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($compra['cantidad']), 1, 0, 'C');
        $pdf->Cell(30, 10, utf8_decode($compra['precio_total']), 1, 1, 'C');
    }
    
    $pdf->Output();
    exit; 
}


$view = isset($_GET['view']) ? $_GET['view'] . '.php' : 'registrar_compra.php';


include "views/layout.php";
?>

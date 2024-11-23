<div class="tab-pane fade show active" id="compras">
    <table class="table table-striped mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
            if (!empty($compras)) {
            foreach ($compras as $compra): ?>
                    <tr>
                        <td><?= htmlspecialchars($compra['nombre']) ?></td>
                        <td><?= htmlspecialchars($compra['dni']) ?></td>
                        <td><?= htmlspecialchars($compra['producto']) ?></td>
                        <td><?= htmlspecialchars($compra['precio_unitario']) ?></td>
                        <td><?= htmlspecialchars($compra['cantidad']) ?></td>
                        <td><?= htmlspecialchars($compra['precio_total']) ?></td>
                    </tr>
                <?php endforeach;
            } else {
                echo "<tr><td colspan='6' class='text-center'>No hay compras registradas.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <form action="index.php?action=generar_pdf" method="post" target="_blank">
        <button type="submit" class="btn btn-secondary">Generar Reporte de Compra PDF</button>
    </form>
</div>

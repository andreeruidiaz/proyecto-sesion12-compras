<div class="tab-pane fade show active" id="registrar">
    <form action="index.php?action=registrar" method="post" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" maxlength="8" required>
        </div>
        <div class="mb-3">
            <label for="producto" class="form-label">Producto</label>
            <input type="text" class="form-control" id="producto" name="producto" required>
        </div>
        <div class="mb-3">
            <label for="precio_unitario" class="form-label">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="precio_unitario" name="precio_unitario" required>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Compra</button>
    </form>
</div>

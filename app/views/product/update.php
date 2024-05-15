<?php
$product = $data['product'];
?>
<div class="border border-secondary-300 p-4">
    <h2 class='text-info'>Actualizar Producto</h2>
    <form action="index.php?url=product/save/<?php echo $product['id']; ?>" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>" required>
            <input type="hidden" name="accion" value="update">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' value="<?php echo htmlspecialchars($product['nombre'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Suplidor</label>
            <input type="text" name="suplidor" class='form-control' value="<?php echo htmlspecialchars($product['suplidor'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Cantidad</label>
            <input type="number" name="cantidad" class='form-control' placeholder="Cantidad" value="<?php echo htmlspecialchars($product['cantidad'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Precio</label>
            <input type="number" name="precio" class='form-control' placeholder="Precio" value="<?php echo htmlspecialchars($product['precio'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group">
            <a href="index.php?url=product" class='btn btn-secondary'>Cancelar</a>
            <button class='btn btn-primary' type="submit">Guardar</button>
        </div>
    </form>
</div>
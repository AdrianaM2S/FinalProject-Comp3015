<?php
$supplier = $data['supplier'];
?>
<div class="border border-secondary-300 p-4">
    <h2 class='text-info'>Actualizar Supplidor</h2>
    <form action="index.php?url=supplier/save/<?php echo $supplier['id']; ?>" method="post" class='form'>
        <div class="form-group mb-3">
            <input type="hidden" name="id" value="<?php echo $supplier['id']; ?>" required>
            <input type="hidden" name="accion" value="update">
            <label>Nombre</label>
            <input type="text" name="nombre" class='form-control' value="<?php echo htmlspecialchars($supplier['nombre'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="text" name="email" class='form-control' value="<?php echo htmlspecialchars($supplier['email'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group mb-3">
            <label>Telefono</label>
            <input type="number" name="telefono" class='form-control' placeholder="Telefono" value="<?php echo htmlspecialchars($supplier['telefono'], ENT_QUOTES, 'UTF-8'); ?>" required>
        </div>
        <div class="form-group">
            <a href='index.php?url=product' class='btn btn-secondary'>Cancelar</a>
            <button class='btn btn-primary' type="submit">Guardar</button>
        </div>
    </form>
</div>
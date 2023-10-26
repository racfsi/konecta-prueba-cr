<?php
if (isset($producto)) {
    $producto = $producto[0];
}
?>
<div class="col-md-12 mt-4 mb-4">
    <h3 class="text-center">Venta producto <?= (isset($producto)) ? '| ' . $producto->nombre : ''; ?></h3>
    <div class="mb-4 text-center">
        <a href="?c=productos">Volver <i class="fas fa-undo"></i></a>
    </div>
</div>
<div class="col-md-12">
    <form class="form-custom form-new-prod" id="form-new-venta">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?= (isset($producto)) ? $producto->nombre : ''; ?>" required readonly />
            </div>
            <div class="form-group col-md-6">
                <label>Cantidad (MÁXIMO <?= (isset($producto)) ? $producto->stock : ''; ?>)</label>
                <input type="number" id="cantidad" name="cantidad" placeholder="Cantidad" value="1" min="1" max="<?= (isset($producto)) ? $producto->stock : ''; ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Stock actual</label>
                <input type="number" value="<?= (isset($producto)) ? $producto->stock : ''; ?>" required readonly />
            </div>
            <div class="form-group col-md-4">
                <label>Precio</label>
                <input type="number" id="currPrecio" name="currPrecio" placeholder="Precio" value="<?= (isset($producto)) ? $producto->precio : ''; ?>" required readonly />
            </div>
            <div class="form-group col-md-4">
                <label>Total venta</label>
                <input type="number" id="newPrice" name="newPrice" value="<?= (isset($producto)) ? $producto->precio : ''; ?>" required readonly />
            </div>
        </div>
        <div class="form-row">
            <div class="save-from">
                <input type="hidden" name="idprod" id="idprod" value="<?= (isset($producto)) ? $producto->id : ''; ?>">
                <input type="hidden" name="stockcurr" id="stockcurr" value="<?= (isset($producto)) ? $producto->stock : ''; ?>">
                <input type="hidden" name="cantvendidas" id="cantvendidas" value="<?= (isset($producto)) ? $producto->cant_vendida : ''; ?>">
                <button type="submit" class="btn btn-success">Realizar venta<i class="fas fa-cash-register"></i></button>
            </div>
        </div>
    </form>
</div>
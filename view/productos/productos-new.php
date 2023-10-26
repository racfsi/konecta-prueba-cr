<?php
if (isset($producto)) {
    $producto = $producto[0];
}
?>
<div class="col-md-12 mt-4 mb-4">
    <h3 class="text-center"><?= (isset($_REQUEST['id'])) ? 'Editar' : 'Nuevo'; ?> producto <?= (isset($producto)) ? '| ' . $producto->nombre : ''; ?></h3>
    <div class="mb-4 text-center">
        <a href="?c=productos">Volver <i class="fas fa-undo"></i></a>
    </div>
</div>
<div class="col-md-12">
    <form class="form-custom form-new-prod" id="form-new-prod">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" value="<?= (isset($producto)) ? $producto->nombre : ''; ?>" required />
            </div>
            <div class="form-group col-md-6">
                <label>Referencia</label>
                <input type="text" id="referencia" name="referencia" placeholder="Referencia" value="<?= (isset($producto)) ? $producto->ref : ''; ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Precio" value="<?= (isset($producto)) ? $producto->precio : ''; ?>" required />
            </div>
            <div class="form-group col-md-6">
                <label>Peso</label>
                <input type="number" id="peso" name="peso" placeholder="Peso" value="<?= (isset($producto)) ? $producto->peso : ''; ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Categoría</label>
                <input type="text" id="categoria" name="categoria" placeholder="Categoria" value="<?= (isset($producto)) ? $producto->categoria : ''; ?>" required />
            </div>
            <div class="form-group col-md-6">
                <label>Stock</label>
                <input type="number" id="stock" name="stock" placeholder="Stock" value="<?= (isset($producto)) ? $producto->stock : ''; ?>" required />
            </div>
        </div>
        <div class="form-row">
            <div class="save-from">
                <input type="hidden" name="action" value="<?= (isset($_REQUEST['id'])) ? 'editar' : 'guardar'; ?>">
                <input type="hidden" name="id" value="<?= (isset($_REQUEST['id'])) ? $producto->id : ''; ?>">
                <button type="submit" class="btn btn-success"><?= (isset($_REQUEST['id'])) ? 'Actualizar' : 'Guardar'; ?><i class="far fa-save"></i></button>
            </div>
        </div>
    </form>
</div>
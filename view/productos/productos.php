<?php
?>
<div class="col-md-12 mt-4 mb-4">
    <h3 class="text-center">Tus productos</h3>
    <div class="btn-new-from">
        <a href="?c=productos&a=new">Nuevo producto<i class="fas fa-plus"></i></a>
    </div>
</div>
<table class="table table-striped table-hover" id="tabla">
    <thead>
        <tr>
            <th class="text-center">Nombre</th>
            <th class="text-center">Referencia</th>
            <th class="text-center">Precio</th>
            <th class="text-center">Peso</th>
            <th class="text-center">Categoria</th>
            <th class="text-center">Stock</th>
            <th class="text-center">Cant Vendidas</th>
            <th class="text-center">Fecha creación</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($productos as $key => $v) {
            $fechaCreacion = $v['fecha_creacion'];
            $newDate = date("d/m/Y", strtotime($fechaCreacion));
        ?>
            <tr>
                <td class="text-center align-middle"><?= $v['nombre']; ?></td>
                <td class="text-center align-middle"><?= $v['ref']; ?></td>
                <td class="text-center align-middle"><?= $v['precio']; ?></td>
                <td class="text-center align-middle"><?= $v['peso']; ?></td>
                <td class="text-center align-middle"><?= $v['categoria']; ?></td>
                <td class="text-center align-middle"><?= $v['stock']; ?></td>
                <td class="text-center align-middle"><?= $v['cant_vendida']; ?></td>
                <td class="text-center align-middle"><?= $newDate; ?></td>
                <td>
                    <a class="btn btn-warning" href="?c=productos&a=new&id=<?= $v['id']; ?>">Editar</a>
                </td>
                <?php if ($v['stock'] > 0) { ?>
                    <td>
                        <a class="btn btn-success" href="?c=productos&a=venta&id=<?= $v['id']; ?>">Vender</a>
                    </td>
                <?php } else { ?>
                    <td>
                    <button type="button" class="btn btn-danger" style="font-size: 12px;">sin stock</button>
                    </td>
                <?php } ?>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pedidos PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        h1 {
            text-align: center;
            color: #003366;
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            font-size: 14px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #0055A4;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 20px;
        }
        header {
            text-align: center;
            font-size: 12px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<header>
    <p>DOLCE BANANA - Listado de Pedidos</p>
    <p>Generado el: <?php echo e(date('d/m/Y')); ?></p>
</header>

<h1>Listado de Pedidos de <?php echo e($pedidos[0]->cliente->nombre); ?> <?php echo e($pedidos[0]->cliente->apellido); ?></h1>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Fecha de compra</th>
        <th>Lugar de entrega</th>
        <th>Medio de pago</th>
        <th>Estado del pedido</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pedido->id_pedido); ?></td>
            <td><?php echo e(\Carbon\Carbon::parse($pedido->fecha_pedido)->format('d/m/Y')); ?></td>
            <td><?php echo e($pedido->direccion
                    ? ($pedido->direccion->localizacion->nombre ?? 'No especificado')
                      . ', ' . $pedido->direccion->nombre
                      . ' ' . $pedido->direccion->numero
                    : 'Dirección no disponible'); ?>

            </td>
            <td><?php echo e($pedido->medioDePago->nombre ?? 'No especificado'); ?></td>
            <td><?php echo e($pedido->entregado == 1? 'ENTREGADO' : 'SIN ENTREGAR'); ?></td>
            <td>$<?php echo e(number_format($pedido->precio_total, 2)); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="total">
    <p>Total General: $<?php echo e(number_format($pedidos->sum('precio_total'), 2)); ?></p>
</div>

</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/pdf/pedidos.blade.php ENDPATH**/ ?>
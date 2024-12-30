<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/editar_producto.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/misPedidos.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <title>Mis compras</title>
</head>
<body>
<?php echo $__env->make('header', ['carrito' => $carrito], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="mis-compras">
    <div class="compras-list">
        <h3>Historial de Compras</h3>
        <hr>
        <?php if($pedidos->isEmpty()): ?>
            <p>No tienes compras registradas.</p>
        <?php else: ?>

        <table class="table table-striped table-hover" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Carrito</th>
                    <th scope="col">Pedido</th>
                    <th scope="col">Total</th>
                    <th scope="col">Ver pedido</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $pedidos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td> <?php echo e($pedido->fecha_pedido); ?> </td>
                        <td> <?php if($pedido->carritoDisponible): ?> ABIERTO <?php else: ?> CERRADO <?php endif; ?> </td>
                        <td> <?php if(!$pedido->entregado): ?> NO ENTREGADO <?php else: ?> ENTREAGO <?php endif; ?> </td>
                        <td> $<?php echo e(number_format($pedido->precio_total, 2)); ?> </td>
                        <td> <a href="/pedidos/<?php echo e($pedido->id_pedido); ?>"><p><strong> Ver el pedido </strong></p></a> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php endif; ?>
            <a href="<?php echo e(route('pedidos.exportar')); ?>">
                <div class="descargaPDF">
                    <button class="button" type="button">
                        <span class="button__text">PDF</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35" id="bdd05811-e15d-428c-bb53-8661459f9307" data-name="Layer 2" class="svg"><path d="M17.5,22.131a1.249,1.249,0,0,1-1.25-1.25V2.187a1.25,1.25,0,0,1,2.5,0V20.881A1.25,1.25,0,0,1,17.5,22.131Z"></path><path d="M17.5,22.693a3.189,3.189,0,0,1-2.262-.936L8.487,15.006a1.249,1.249,0,0,1,1.767-1.767l6.751,6.751a.7.7,0,0,0,.99,0l6.751-6.751a1.25,1.25,0,0,1,1.768,1.767l-6.752,6.751A3.191,3.191,0,0,1,17.5,22.693Z"></path><path d="M31.436,34.063H3.564A3.318,3.318,0,0,1,.25,30.749V22.011a1.25,1.25,0,0,1,2.5,0v8.738a.815.815,0,0,0,.814.814H31.436a.815.815,0,0,0,.814-.814V22.011a1.25,1.25,0,1,1,2.5,0v8.738A3.318,3.318,0,0,1,31.436,34.063Z"></path></svg></span>
                      </button>
                </div>
            </a>
    </div>
</section>
<script src=<?php echo e(asset("js/tablaPedidos.js")); ?>></script>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/clientes/cliente_compras.blade.php ENDPATH**/ ?>
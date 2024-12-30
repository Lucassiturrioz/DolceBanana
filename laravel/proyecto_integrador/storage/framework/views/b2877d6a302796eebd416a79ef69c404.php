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
    <link rel="stylesheet" href="<?php echo e(asset('css/carrito.css')); ?>">
    <title>Mi pedido</title>
</head>
<body>
<?php echo $__env->make('header', ['carrito' => $carrito], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="carrito">
    <div class="carrito-list">
        <h2 class="section-title">
            <?php if($pedido->carritoDisponible): ?>
                Carrito de Compras
            <?php elseif(!$pedido->entregado): ?>
                Estado del Pedido: Sin Entregar
            <?php else: ?>
                Estado del Pedido: Entregado
            <?php endif; ?>
        </h2>
        <hr>
        
        <p><strong>Cliente:</strong> <?php echo e($pedido->cliente->nombre); ?> <?php echo e($pedido->cliente->apellido); ?></p>
        <p><strong>Total de productos:</strong> <?php echo e($pedido->item->count()); ?></p>
        <p><strong>Fecha del pedido: </strong> <?php echo e($pedido->fecha_pedido); ?></p>
        <?php if($pedido->fecha_pago != null): ?>
            <p><strong>Fecha del pago: </strong> <?php echo e($pedido->fecha_pago); ?></p>
        <?php endif; ?>
        <h3>Productos en el Pedido</h3>
        <hr>
        <?php $__currentLoopData = $pedido->item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="producto-item">
                <img class="fotoProd" src="<?php echo e(asset('storage/' . $unItem->producto->foto_producto)); ?>" alt="Foto del producto">
                <span>Cantidad: <?php echo e($unItem->cantidad); ?></span>
                <span>Total: $<?php echo e($unItem->total); ?></span>

                <!-- Botón para eliminar productos solo si el carrito está disponible -->
                <?php if($pedido->carritoDisponible): ?>
                    <form action="/pedidos/<?php echo e($pedido->id_pedido); ?>}/items/<?php echo e($unItem->id_producto_x_pedido); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <div class="totalPedido">
            <div>Total:</div>
            <div> $ <?php echo e($pedido->precio_total); ?> </div>
        </div>

        <!-- Acciones según el estado del pedido -->
        <?php if($pedido->carritoDisponible): ?>
        <a href="/pagos/<?php echo e($pedido->id_pedido); ?>/seleccionar">
        <div class="contenedor">
            <div class="left-side">
                <div class="carta">
                    <div class="card-line"></div>
                    <div class="botones"></div>
                </div>
                <div class="post">
                    <div class="post-line"></div>
                    <div class="screen">
                        <div class="dollar">$</div>
                    </div>
                    <div class="numbers"></div>
                    <div class="numbers-line2"></div>
                </div>
            </div>
            <div class="right-side">
                <div class="new">Proceder al pago</div>
                <svg viewBox="0 0 451.846 451.847" height="512" width="512" xmlns="http://www.w3.org/2000/svg" class="arrow">
                    <path fill="#cfcfcf" data-old_color="#000000" class="active-path" data-original="#000000" d="M345.441 248.292L151.154 442.573c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744L278.318 225.92 106.409 54.017c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.287 194.284c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"></path>
                </svg>
            </div>
        </div>
        </a>
        <?php elseif(!$pedido->entregado): ?>
            <p class="section-title">Estado Actual</p>
            <p>Sin entregar</p>
            <form action="/pedidos/<?php echo e($pedido->id_pedido); ?>/entregado" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <button type="submit" class="btn btn-primary">Pedido entregado</button>
            </form>
        <?php else: ?>
            <p class="section-title">Estado Actual</p>
            <p>Entregado</p>
        <?php endif; ?>
        
    </div>
</section>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/pedidos/carrito_compras.blade.php ENDPATH**/ ?>
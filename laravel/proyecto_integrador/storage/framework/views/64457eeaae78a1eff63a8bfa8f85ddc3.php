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

    <title>Pago realizado</title>
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-3 text-success font-weight-bold">Pago Realizado</h1>
        <p class="lead text-muted">Tu pago se ha procesado con éxito y el pedido está listo para ser entregado.</p>
    </div>

    <!-- Información del pedido -->
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="font-weight-bold mb-0">Detalles del Pedido #<?php echo e($pedido->id_pedido); ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Cliente:</strong> <?php echo e($pedido->cliente->nombre); ?> <?php echo e($pedido->cliente->apellido); ?></p>
                    <p><strong>Fecha del Pedido:</strong> <?php echo e($pedido->fecha_pedido); ?></p>
                    <p><strong>Total del Pedido:</strong> $<?php echo e(number_format($pedido->precio_total, 2, ',', '.')); ?></p>
                </div>
                <div class="col-md-6">
                    <p><strong>Estado del Pago:</strong>
                        <span class="badge bg-success text-white">Completado</span>
                    </p>
                    <p><strong>Forma de Pago:</strong> <?php echo e($pedido->medioDePago->nombre); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botones de acción con un diseño limpio -->
    <div class="mt-5 text-center">
        <a href="/pedidos/<?php echo e($pedido->id_pedido); ?>" class="btn btn-outline-primary btn-lg mx-2">Ver mi pedido</a>
        <a href="/" class="btn btn-outline-secondary btn-lg mx-2">Volver al Inicio</a>
    </div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/pedidos/pago_realizado.blade.php ENDPATH**/ ?>
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
    <title>Editar producto</title>
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="editar-producto">
    <h2 class="section-title">Editar Producto</h2>
    <div class="producto-form">
        <form action="/productos/<?php echo e($producto->id_producto); ?>/editar" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>

            <!-- Nombre del Producto -->
            <label for="nombre_producto">Nombre del Producto:</label>
            <input
                type="text"
                id="nombre_producto"
                name="nombre_producto"
                value="<?php echo e(old('nombre_producto', $producto->nombre_producto)); ?>"
                autocomplete="off"
                required>
            <p>Nombre actual: <?php echo e($producto->nombre_producto); ?></p>

            <!-- Precio -->
            <label for="precio_producto">Precio:</label>
            <input
                type="number"
                id="precio_producto"
                name="precio_producto"
                value="<?php echo e(old('precio_producto', $producto->precio_producto)); ?>"
                step="0.01"
                min="0"
                required>
            <p>Precio actual: <?php echo e($producto->precio_producto); ?></p>

            <!-- Stock -->
            <label for="editar-stock">Stock:</label>
            <input
                type="number"
                id="editar-stock"
                name="stock"
                value="<?php echo e(old('stock', 1 )); ?>"
                min="0"
                required>
            <p>Stock actual: <?php echo e($producto->stock_producto); ?></p>

            <!-- Botón Actualizar -->
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</section>

<!-- Botón Volver -->
<a href="/productos/<?php echo e($producto->id_producto); ?>" class="btn btn-secondary">Volver atrás</a>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/productos/editar_producto.blade.php ENDPATH**/ ?>
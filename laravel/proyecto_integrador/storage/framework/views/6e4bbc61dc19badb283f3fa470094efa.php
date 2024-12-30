<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/footer.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/categoria.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  <!--Efectos WOW -->

    <title>Productos</title>
</head>
<?php echo $__env->make('header',['carrito'=>$carrito], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<div class="tituloCategorias">
    <span>Productos</span>
</div>
<div class="row">
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col d-flex justify-content-center mt-5">
            <section class="wow animate__rotateIn " data-wow-duration="2s" data-wow-delay ="1.5s">
            <div class="carta ">
                <div class="carta-img"><div class="img"></div> <img src="<?php echo e(asset('storage/'.$producto->foto_producto)); ?>" alt=""></div>
                <div class="carta-title"><?php echo e($producto->nombre_producto); ?></div>
                <div class="carta-subtitle"><?php echo e($producto->descripcion_producto); ?>.</div>
                <hr class="carta-divider">
                <div class="carta-footer">
                    <div class="carta-price"><span>$</span> <?php echo e($producto->precio_producto); ?></div>
                    <button class="carta-btn">
                        <a style="text-decoration: none; color: black;" href="/productos/<?php echo e($producto->id_producto); ?>">VER</a>
                    </button>
                </div>
            </div>
            </section>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


</body>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>   <!--Efectos WOW -->
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>   <!--Efectos WOW -->


</html>

<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/productos/productos.blade.php ENDPATH**/ ?>
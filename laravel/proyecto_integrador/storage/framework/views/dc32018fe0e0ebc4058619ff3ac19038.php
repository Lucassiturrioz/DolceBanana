<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link  rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/categoria.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
    <title>Categorias</title>
</head>
<?php echo $__env->make('header',['carrito'=>$carrito], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
    <div class="tituloCategorias">
        <span><?php echo e($categoria->nombre_categoria); ?></span>
    </div>
    <div class="row">
        <?php $__currentLoopData = $categoria->productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col d-flex justify-content-center mt-5">
            <div class="carta ">
                <div class="carta-img"><div class="img"></div> <img src="<?php echo e(asset('storage/'.$producto->foto_producto)); ?>" alt=""></div>
                <div class="carta-title"><?php echo e($producto->nombre_producto); ?></div>
                <div class="carta-subtitle"><?php echo e($producto->descripcion_producto); ?></div>
                <hr class="carta-divider">
                <div class="carta-footer">
                    <div class="carta-price"><span>$</span> <?php echo e($producto->precio_producto); ?></div>
                    <button class="carta-btn">
                        <a href="/productos/<?php echo e($producto->id_producto); ?>" style="text-decoration: none; color: black;">VER</a>
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>

<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/categorias/categoria.blade.php ENDPATH**/ ?>
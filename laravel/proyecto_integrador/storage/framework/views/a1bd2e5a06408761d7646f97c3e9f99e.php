<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="js/splide-4.1.3/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/boton.css')); ?>">  <!--Boton -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  <!--Efectos WOW -->

    <title>Dolce Banana</title>
</head>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>


<a href="javascript:history.back()" class="btn btn-lg btn-primary btn-lg-square history-back"><i class="bi bi-arrow-90deg-left"></i></a>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> <!--Boton -->

<div class="image-container">
    <img src="fotos/fondo.gif" alt="fondo" id="fondo">
    <p>DOLCE BANANA<img width="96" height="96" src="https://img.icons8.com/fluency/96/banana.png" alt="banana"/></p>
</div>
<section id="historia" class="wow animate__bounceInUp data-wow-duration="2s">
    <?php echo $__env->make('historia', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section id="locales" class="wow animate__lightSpeedInRight" data-wow-duration="2s">
    <?php echo $__env->make('locales', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section id="categorias" class="wow animate__fadeInUp" data-wow-duration="2s">
    <?php echo $__env->make('categorias.categorias', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section id="slider" class="wow animate__zoomInUp" data-wow-duration="2s">
    <?php echo $__env->make('slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section id="nosotros" class="wow animate__bounceInRight" data-wow-duration="2s">
    <?php echo $__env->make('nosotros', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<section class="wow animate__fadeIn" data-wow-duration="2s">
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>   <!--Efectos WOW -->
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>   <!--Efectos WOW -->


</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/home.blade.php ENDPATH**/ ?>
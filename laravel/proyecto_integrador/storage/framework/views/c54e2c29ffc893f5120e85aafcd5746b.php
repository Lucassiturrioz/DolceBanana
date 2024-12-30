<link rel="stylesheet" href="<?php echo e(asset('css/slider.css')); ?>">
    <div class="section-title">
        <span>DESTACADOS</span>
    </div>
    <div class="Background">
    <div class="container">
    <div class="row">
        <div class="col-12" id="slider">
            <section id="image-carousel" class="splide" aria-label="Beautiful Images">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="splide__slide">
                                <a href="/productos/<?php echo e($producto->id_producto); ?>">
                                    <?php if(empty($producto->foto_producto)): ?>
                                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Imagen no disponible">
                                    <?php else: ?>
                                        <img class="card-img-top" src="<?php echo e(asset('storage/' . $producto->foto_producto)); ?>" alt="Foto del producto">
                                    <?php endif; ?>
                                    <p><?php echo e($producto->nombre_producto); ?></p>
                                    <p>$<?php echo e($producto->precio_producto); ?></p>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    </div>
</div>

<script src="js/splide-4.1.3/dist/js/splide.min.js"></script>
<script src="js/sliderHome.js"></script>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/slider.blade.php ENDPATH**/ ?>
<header>
    <div class="ofertas-deslizando text-center py-2">
        <p class="mb-0" >¡Aprovecha nuestras ofertas por tiempo limitado!</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="<?php echo e(asset('fotos/logoNuevo.png')); ?>" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a href="<?php echo e(url('/')); ?>#historia" class="nav-link">Historia</a>
                    <a href="<?php echo e(url('/')); ?>#locales" class="nav-link">Locales</a>
                    <a href="<?php echo e(url('/')); ?>#nosotros" class="nav-link">Nosotros</a>
                    <a href="<?php echo e(url('/')); ?>#categorias" class="nav-link">Categorías</a>
                    <a href="/productos" class="nav-link">Productos</a>
                </ul>

                <div class="d-flex align-items-center">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="/clientes/<?php echo e(auth()->user()->id_cliente); ?>" class="btn btn-outline-light me-2"><i class="bi bi-person-circle"></i></a>
                        <a href="/logout" class="btn btn-outline-light me-2">Cerrar Sesión</a>
                        <div class="position-relative">
                            <a href="/pedidos/<?php echo e($carrito->id_pedido); ?>" class="btn btn-outline-light">
                                <i class="bi bi-cart"></i>
                            </a>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo e($carrito->item->count()); ?></span>
                        </div>
                    <?php else: ?>
                        <a href="/login" class="btn btn-outline-light me-2">Iniciar Sesión</a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/header.blade.php ENDPATH**/ ?>
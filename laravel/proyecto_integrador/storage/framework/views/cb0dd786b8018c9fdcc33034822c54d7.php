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
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/productosCliente.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/formularioProducto.css')); ?>">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <meta name="CSRF-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>  <!--Efectos WOW -->

    <title>Mis productos</title>
</head>
<body>
<?php echo $__env->make('header', ['carrito' => $carrito], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="contenedorProductos">
        <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
    <?php if($productos->isEmpty()): ?>
        <div class="container d-flex justify-content-center align-items-center mt-5 min-vh-100 ">
                <span class="text">¡No tenes productos!</span>
        </div>
    <?php else: ?>
        <div class="container">
            <h1>Mis productos</h1>
            <table class="table table-striped table-hover" id="myTable">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-id=<?php echo e($producto->id_producto); ?>>
                            <td>
                                <?php if(empty($producto->foto_producto)): ?>
                                    <a href="/productos/<?php echo e($producto->id_producto); ?>"><img class="fotoProd" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Imagen no disponible"></a>
                                <?php else: ?>
                                    <a href="/productos/<?php echo e($producto->id_producto); ?>"><img class="fotoProd" src="<?php echo e(asset('storage/' . $producto->foto_producto)); ?>" alt="Foto del producto"></a>
                                <?php endif; ?>
                            </td>
                            <td class="nombre_producto"><?php echo e($producto->nombre_producto); ?></td>
                            <td class="descripcion_producto"><?php echo e($producto->descripcion_producto); ?></td>
                            <td class="precio_producto">$<?php echo e(number_format($producto->precio_producto, 2)); ?></td>
                            <td class="stock_producto"><?php echo e($producto->stock_producto); ?></td>
                            <td>
                                <a href="#" data-id="<?php echo e($producto->id_producto); ?>" class="btn btn-sm btn-primary btn-editar">Editar</a>
                            <?php if($producto->estado == 'Disponible'): ?>
                                <form action="<?php echo e(route('productos.destroy', $producto->id_producto)); ?>" method="POST" class="d-inline">
                                     <?php echo csrf_field(); ?>
                                     <?php echo method_field('DELETE'); ?>
                                     <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                   </form>
                                <?php else: ?>
                                 <form action="<?php echo e(route('productos.restore', $producto->id_producto)); ?>" method="POST" class="d-inline">
                                      <?php echo csrf_field(); ?>
                                      <?php echo method_field('PUT'); ?>
                                      <button type="submit" class="btn btn-sm btn-success">Recuperar</button>
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
        <a href="/productos/crear">
            <button class="btn btn-sm btn-primary botonAgregar">
                <i class="bi bi-plus-lg"></i>
            </button>
        </a>
    </div>

<section id="test" class="wow animate__fadeInDown" data-wow-duration="2s" data-wow-delay ="1.5s">
    <?php echo $__env->make('/productos/formularioEditarProducto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src=<?php echo e(asset("js/tablaProducto.js")); ?>></script>
<script src=<?php echo e(asset("js/tablaProducto2.js")); ?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>   <!--Efectos WOW -->
<script src="<?php echo e(asset('js/wow.js')); ?>"></script>   <!--Efectos WOW -->


</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/productos/productos_cliente.blade.php ENDPATH**/ ?>
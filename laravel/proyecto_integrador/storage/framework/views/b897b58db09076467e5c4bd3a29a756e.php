<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/header.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/footer.css')); ?>">
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!-- Alertas -->
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Formulario -->
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Crear Producto</h3>
                </div>
                <div class="card-body">
                    <form action="/productos/crear" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del Producto:</label>
                            <input type="text" name="nombre_producto" id="nombre" class="form-control" placeholder="Ingrese el nombre del producto" required>
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="number" name="precio_producto" id="precio" class="form-control" placeholder="Ingrese el precio del producto" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Stock:</label>
                            <input type="number" name="stock_producto" id="stock" class="form-control" placeholder="Ingrese la cantidad de stock" required>
                        </div>

                        <div class="mb-3">
                            <label for="categorias" class="form-label">Categoría:</label>
                            <select name="categoria_id" id="categorias" class="form-select">
                                <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($categoria->id_categoria); ?>"><?php echo e($categoria->nombre_categoria); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion_producto" class="form-label">Descripción del producto: </label>
                            <input type="text" name="descripcion_producto" id="descripcion_producto" class="form-control" placeholder="Ingrese una descripcion para su producto">
                        </div>

                        <div class="mb-3">
                            <label for="foto_producto" class="form-label">Foto del Producto:</label>
                            <input type="file" name="foto_producto" id="foto_producto" class="form-control">
                        </div>

                        <input type="hidden" name="vendedor_id" value="<?php echo e(auth()->user()->id_cliente); ?>">

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar Producto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/productos/crear_producto.blade.php ENDPATH**/ ?>
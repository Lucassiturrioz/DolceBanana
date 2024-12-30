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

    <title>Pago del pedido</title>
</head>
<body>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="text-center mb-4 text-primary">
            <i class="bi bi-wallet2"></i> Seleccionar Método de Pago
        </h1>

        <p class="text-center fs-4">
            Total a pagar: <strong class="text-success">$<?php echo e(number_format($pedido->precio_total, 2)); ?></strong>
        </p>

        <form action="/pagos/<?php echo e($pedido->id_pedido); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="pedido_id" value="<?php echo e($pedido->id_pedido); ?>">
            <input type="hidden" name="total" value="<?php echo e($pedido->precio_total); ?>">

            <!-- Método de Pago -->
            <div class="mb-4">
                <label for="metodo" class="form-label fw-bold">Método de Pago:</label>
                <select name="metodo" id="metodo" class="form-select" required>
                    <option value="" disabled selected>Seleccione un método</option>
                    <?php $__currentLoopData = $medioDePagos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($medio->id_medio_pago); ?>">
                            <?php echo e($medio->nombre); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Dirección Favorita -->
            <div class="mb-4">
                <label for="favoritos" class="form-label fw-bold">Enviar a:</label>
                <select name="favoritos" id="favoritos" class="form-select">
                    <option value="" disabled selected>Selecciona un lugar favorito</option>
                    <?php $__currentLoopData = $favoritos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $favorito): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($favorito->id_direccion); ?>">
                            <?php echo e($favorito->localizacion->nombre); ?> - <?php echo e($favorito->nombre); ?> - <?php echo e($favorito->numero); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <option value="0">Otra dirección</option>
                </select>
            </div>

            <!-- Dirección Personalizada -->
            <div id="nuevaDireccion" style="display: none;">
                <h5 class="fw-bold">Nueva Dirección:</h5>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="localizacion" class="form-label">Ciudad:</label>
                        <select name="localizacion" id="localizacion" class="form-select">
                            <?php $__currentLoopData = $localizaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localizacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($localizacion->id_localizacion); ?>"><?php echo e($localizacion->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control"
                               placeholder="Ingresa tu dirección">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numero" class="form-label">Número:</label>
                    <input type="text" id="numero" name="numero" class="form-control"
                           placeholder="Ingresa el número">
                </div>
            </div>

            <!-- Botón de Confirmación -->
            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary btn-lg">
                    <i class="bi bi-check-circle-fill"></i> Confirmar Pago
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('favoritos').addEventListener('change', function () {
        const nuevaDireccion = document.getElementById('nuevaDireccion');
        const inputs = nuevaDireccion.querySelectorAll('input, select');
        if (this.value === '0') {
            nuevaDireccion.style.display = 'block';
            inputs.forEach(input => input.required = true);
        } else {
            nuevaDireccion.style.display = 'none';
            inputs.forEach(input => input.required = false);
        }
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cIgyIobUiwESzqDc1XILjDDaEegUsT4mLGfdLCZLGrq1GfMxa57iSEv/a7iQJywz" crossorigin="anonymous"></script>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views/pedidos/generar_pago.blade.php ENDPATH**/ ?>
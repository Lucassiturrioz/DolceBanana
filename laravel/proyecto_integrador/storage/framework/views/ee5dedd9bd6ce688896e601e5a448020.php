<section id="editar-producto">
    <div class="producto-form oculto" id="editFormContainer">
        <div class="titulos">
            <h2 class="section-title">Editar Producto</h2>
            <button class="botonCerrar">
                <span class="X"></span>
                <span class="Y"></span>
                <div class="close">Cerrar</div>
            </button>
        </div>
        <hr>
        <form action="/productos/<?php echo e($producto->id_producto); ?>/editar" method="POST" id="formularioEditar">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>
            <!-- Nombre del Producto -->
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <label for="nombre_producto">Nombre del Producto:</label>
                        <input
                            type="text"
                            id="nombre_producto"
                            name="nombre_producto"
                            value="<?php echo e(old('nombre_producto', $producto->nombre_producto)); ?>"
                            autocomplete="off">

                        <!-- Precio -->
                        <label for="precio_producto">Precio:</label>
                        <input
                            type="number"
                            id="precio_producto"
                            name="precio_producto"
                            value="<?php echo e(old('precio_producto', $producto->precio_producto)); ?>"
                            step="0.01"
                            min="0">

                        <!-- Stock -->
                        <label for="stock_producto">Nuevo stock:</label>
                        <input
                            type="number"
                            id="stock_producto"
                            name="stock_producto"
                            value="<?php echo e(old('stock_producto', 1 )); ?>"
                            min="0">
                        
                        <!-- Descripcion -->
                        <label for="descripcion_producto">Descripcion:</label>
                            <input
                                type="text"
                                id="descripcion_producto"
                                name="descripcion_producto"
                                value="<?php echo e(old('descripcion_producto', $producto->descripcion_producto)); ?>"
                                min="0">
                    </div>
                    <div class="col-4">
                        <img id="imagenDelProducto" src="" alt="">                                          
                    </div>
                </div>
            </div>
            <div class="contenedorActualizar">
                <button type="submit" class="btn btn-primary" id="form_agregar">Actualizar</button>
            </div>
        </form>
    </div>
</section><?php /**PATH C:\Facultad 2024\Back up 2024\Curso PHP\TP\ProyectoFullStack\laravel\proyecto_integrador\resources\views//productos/formularioEditarProducto.blade.php ENDPATH**/ ?>
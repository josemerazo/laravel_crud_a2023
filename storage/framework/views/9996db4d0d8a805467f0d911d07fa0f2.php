<?php
    $saludo = 'Nuevas';
?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Creación de persona <?php echo e($saludo); ?></h1>
        <form action="<?php echo e(url('personas')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input name="nombre" type="text" class="form-control"
                    value="<?php echo e(isset($persona->nombre) ? $persona->nombre : ''); ?>" id="nombre"
                    placeholder="Ejemplo: James Jordy">

            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input name="apellido" type="text" class="form-control" id="apellido"
                    value="<?php echo e(isset($persona->apellido) ? $persona->apellido : ''); ?>" placeholder="Ejemplo: Ruiz Panezo">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input name="edad" type="number" step="1" min="0" class="form-control" id="edad"
                value="<?php echo e(isset($persona->edad) ? $persona->edad : ''); ?>" placeholder="Ejemplo: 12">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_tes1\resources\views/persona/form.blade.php ENDPATH**/ ?>
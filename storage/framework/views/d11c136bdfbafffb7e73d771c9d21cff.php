
<?php $__env->startSection('content'); ?>
    <div class="container">
        <a class="btn btn-success" href="">Agregar</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>

                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($persona->nombre); ?></td>
                        <td><?php echo e($persona->edad); ?></td>
                        <td><?php echo e($persona->apellido); ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo e(route('personas.edit', [$persona])); ?>">
                                <i class="fa fa-edit"></i>Editar
                            </a>
                        </td>
                        <td>
                            <form action="<?php echo e(route('personas.destroy', [$persona])); ?>" method="post">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud_tes1\resources\views/persona/lista.blade.php ENDPATH**/ ?>
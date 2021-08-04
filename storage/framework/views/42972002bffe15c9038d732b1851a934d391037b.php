<?php $__env->startSection('content'); ?>

    <h1><?php echo e($task->solution); ?></h1>
    <p class="lead">Iteration: <?php echo e($task->iteration); ?></p>
    <hr>



    <div class="pull-right">
        <?php echo Form::open([
                'method' => 'DELETE',
                'route' => ['tasks.destroy', $task->id]
            ]); ?>


        <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-info">Back</a>
        <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-primary">Regenerate</a>

        <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

        <?php echo Form::close(); ?>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\solution\resources\views/tasks/show.blade.php ENDPATH**/ ?>
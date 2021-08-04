<?php $__env->startSection('content'); ?>

    <h1>HIER + GIBT + ES = NEUES</h1>
    <p class="lead">All solutions. <a href="<?php echo e(route('tasks.create')); ?>">Add a new one?</a></p>
    <hr>

    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('flash_message')); ?>

        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h3><?php echo e($task->solution); ?></h3>
        <p>Iteration: <?php echo e($task->iteration); ?></p>
        <p>
            <a href="<?php echo e(route('tasks.show', $task->id)); ?>" class="btn btn-info">View Solution</a>
            <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-primary">Regenerate Solution</a>
        </p>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\solution\resources\views/tasks/index.blade.php ENDPATH**/ ?>
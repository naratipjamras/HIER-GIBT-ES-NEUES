<?php $__env->startSection('content'); ?>

    <h1>HIER + GIBT + ES = NEUES</h1>
    <p class="lead">Generate solution below.</p>
    <hr>


    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('flash_message')); ?>

        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo e($error); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>


    <?php echo Form::open([
        'route' => 'tasks.store'
    ]); ?>


    <div class="form-group">
        <?php echo Form::label('solution', 'Solution:', ['class' => 'control-label']); ?>

        <?php echo Form::text('solution',  $solution , ['class' => 'form-control', 'readonly' => 'true']); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('iteration', 'Iteration:', ['class' => 'control-label']); ?>

        <?php echo Form::text('iteration',  $iteration , ['class' => 'form-control', 'readonly' => 'true']); ?>

    </div>

    <?php echo Form::submit('Create New Solution', ['class' => 'btn btn-primary']); ?>


    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\solution\resources\views/tasks/create.blade.php ENDPATH**/ ?>
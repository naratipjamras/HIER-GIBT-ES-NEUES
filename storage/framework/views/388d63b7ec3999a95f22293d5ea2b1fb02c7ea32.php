<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand">Problem</a>
        </div>
        <div class="nav navbar-nav navbar-right">

            <li><a href="<?php echo e(url('tasks')); ?>">All Solution</a></li>
        </div>
    </div>
</nav>

<main>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</main>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\solution\resources\views/layouts/master.blade.php ENDPATH**/ ?>
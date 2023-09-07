<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <?php $__env->startSection('title', 'About Us'); ?>

    <?php $__env->startSection('content'); ?>
        <h2>About Us</h2>
        <p>We are a small company doing great things.</p>
    <?php $__env->stopSection(); ?>
</body>
</html>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PPW2 Pertemuan Ke-2\latihan-praktikum\resources\views/exampleabout.blade.php ENDPATH**/ ?>
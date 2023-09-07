<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/exampleabout">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer>
        &copy; <?php echo e(date('Y')); ?> My Website
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\PPW2 Pertemuan Ke-2\latihan-praktikum\resources\views/layout.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link
        href=<?php echo e(url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Raleway:300,400,500,600,700&display=swap')); ?>

        rel="stylesheet" />
    <link rel="shortcut icon" href=<?php echo e(asset('img/shawon-himu.ico')); ?> type="image/x-icon" />
    <link rel="stylesheet" href=<?php echo e(asset('css/all.min.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('css/flaticon.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('slick/slick.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('slick/slick-theme.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('css/fontawesome.min.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('css/bootstrap.min.css')); ?> />

    <link rel="stylesheet" href=<?php echo e(asset('style.css')); ?> />
</head>

<body>

    <?php echo $__env->yieldContent('content'); ?>

    <script type="text/javascript">
        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("galleryImg")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modalImg").src = src;
                const myModal = new bootstrap.Modal(document.getElementById("galleryModal"));
                myModal.show();
            }
        });
    </script>

    <script type="text/javascript" src=<?php echo e(asset('slick/jquery/jquery.min.js')); ?>></script>

    <script src=<?php echo e(asset('slick/slick.min.js')); ?>></script>

    <script src=<?php echo e(asset('slick/slick-custom.js')); ?>></script>
    <script src=<?php echo e(asset('js/bootstrap.min.js')); ?>></script>
    <script src=<?php echo e(asset('js/popper.min.js')); ?>></script>
</body>

</html>
<?php /**PATH E:\Laravel\module-9\resources\views/layout/app.blade.php ENDPATH**/ ?>
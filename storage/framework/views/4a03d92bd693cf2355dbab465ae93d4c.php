<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('component.Navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="personalBG">
        <div class="overlay">
            
            <?php echo $__env->make('component.About', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>
    </div>
    <?php echo $__env->make('component.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->make('component.ViewImgModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\module-9\resources\views/About.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

<div class="403">
    <div class="my-12 text-center">
        <h1 class="text-5xl font-bold">404</h1>
        <p class="font-bold text-gray-600 mb-6">Not Found.</p>
        <a href="<?php echo e(route('home')); ?>" class="text-sm text-gray-600 border border-gray-400 px-4 py-2 rounded">Back to Home.</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\College-System-Laravel\resources\views/errors/404.blade.php ENDPATH**/ ?>
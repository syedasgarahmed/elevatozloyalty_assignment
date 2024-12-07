

<?php $__env->startSection('title', 'User Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-container">
        <h1 class="welcome-message">Welcome, <?php echo e(Auth::user()->name); ?>!</h1>
        <p>Your email: <?php echo e(Auth::user()->email); ?></p>
        
        <a href="<?php echo e(route('my-profile')); ?>" class="btn btn-primary">View / Get Profile</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UserAPI_assignment\resources\views/user/dashboard.blade.php ENDPATH**/ ?>
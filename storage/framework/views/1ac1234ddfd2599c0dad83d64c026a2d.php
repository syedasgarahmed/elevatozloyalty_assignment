

<?php $__env->startSection('title', 'My Profile'); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-container">
        <?php if(session('success')): ?>
            <h6 class="alert alert-success"><?php echo e(session('success')); ?></h6>
        <?php endif; ?>
        <h1 class="welcome-message">Hello, <?php echo e(Auth::user()->name); ?>!</h1>

        <h3>Your Details:</h3>
        <p><strong>Email:</strong> <?php echo e(Auth::user()->email); ?></p>
        <p><strong>Mobile:</strong> <?php echo e(Auth::user()->mobile_no); ?></p>

        <h3>Address Information:</h3>
        <?php if($address): ?>
            <p><strong>Address Line 1:</strong> <?php echo e($address->address_1); ?></p>
            <p><strong>Address Line 2:</strong> <?php echo e($address->address_2); ?></p>
            <p><strong>City:</strong> <?php echo e($address->city); ?></p>
            <p><strong>State:</strong> <?php echo e($address->state); ?></p>
            <p><strong>Pincode:</strong> <?php echo e($address->pincode); ?></p>
        <?php else: ?>
            <p>No address details available.</p>
        <?php endif; ?>

        <a href="<?php echo e(route('edit-profile')); ?>" class="btn btn-primary">Edit Profile</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UserAPI_assignment\resources\views/user/profile.blade.php ENDPATH**/ ?>
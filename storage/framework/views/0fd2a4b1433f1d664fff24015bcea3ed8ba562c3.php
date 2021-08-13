
<?php $__env->startSection('content'); ?>
    <table class="table table-borderless">
        <tr>
            <td>Name</td>
            <td>email</td>
            <td>Password</td>
        </tr>
        <tbody>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td><?php echo e($data->name); ?></td>
                <td><?php echo e($data->email); ?></td>
                <td><?php echo e($data->password); ?></td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/profil/index.blade.php ENDPATH**/ ?>
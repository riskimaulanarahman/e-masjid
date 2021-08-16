
<?php $__env->startSection('content'); ?>



<div class="profilmasjid">
    <div class="container mt-5">

        <div class="row">
                <div class="col-md-12">
                    <thead >
                    <table>
                            <?php $__currentLoopData = $masjids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td rowspan="4"><img src="<?php echo e(asset('foto')); ?>/<?php echo e($data->foto); ?>" width = "150px" height="150px" class="mb-4"></td>
                            </tr>
                            <tr><td colspan="2"><?php echo e($data ->nama_masjid); ?></td></tr>
                            <tr><td colspan="2"><?php echo e($data ->alamat); ?></td></tr>
                            <tr>
                            <td colspan="2">
                                <a href="/detailmasjid/<?php echo e($data->id); ?>" class="petunjuk btn btn-success"><i class="fas fa-info-circle"> Detail</i></a>
                                <a href="<?php echo e($data ->petunjuk_arah); ?>" target="_blank" class="petunjuk btn btn-primary"> <i class="fas fa-road"> Petunjuk arah</i> </a>
                            </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\emasjid\resources\views/profilmasjid.blade.php ENDPATH**/ ?>
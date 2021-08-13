
<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="mt-5">Kontak</h2>
    <div class="col-sm-6 mt-3">
            <form action="" class="border-0">
                <div class="row ">
                    <div class="col-sm-12 mb-2">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="nama" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="email" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <div class="form-group">
                            <label for="">No Telp/ Hp</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="No Telp/Hp" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-2">
                        <div class="form-group">
                            <label for="">Pesan</label>
                            <textarea type="text" class="form-control" id="kategori" name="kategori" placeholder="Pesan" ></textarea>
                            <div class="text-danger">
                                <?php $__errorArgs = ['kategori'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="" class="btn btn-primary">Kirim</a>
            </form>
    </div>
    <div class="col-sm-6">
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/kontak.blade.php ENDPATH**/ ?>
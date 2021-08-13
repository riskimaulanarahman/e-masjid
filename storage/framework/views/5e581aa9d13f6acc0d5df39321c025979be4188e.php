
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > <?php echo e($title); ?></div> 
        </div>

        <form action="/bank/update/<?php echo e($bank->id); ?>" method="POST" enctype="multipart/form-data">
            
            <?php echo csrf_field(); ?>
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Kode Bank</label>
                                <input type="text" class="form-control" value="<?php echo e($bank->kode_bank); ?>" id="kode_bank" name="kode_bank" placeholder="Kode Bank" >
                                <div class="text-danger">
                                    <?php $__errorArgs = ['kode_bank'];
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

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Bank</label>
                                <input type="text" class="form-control" value="<?php echo e($bank->nama_bank); ?>" id="nama_bank" name="nama_bank" placeholder="Nama Bank" >
                                <div class="text-danger">
                                    <?php $__errorArgs = ['nama_bank'];
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

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Ganti Icon</label><br>
                                <input type="file" id="icons" name="icons"  accept="image/png">
                                 <div class="text-danger">
                                    <?php $__errorArgs = ['icons'];
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

                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Icon</label><br>
                                <img src="<?php echo e(asset('iconbank')); ?>/<?php echo e($bank->icons); ?>" alt="" width="100px" height="100px">
                            </div>
                        </div>

                        
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                    </div>
                
            
            </div>
        </form>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/bank/edit.blade.php ENDPATH**/ ?>
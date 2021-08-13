<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Edit Data Fasilitas</div>
        </div>
            <form action="<?php echo e(route('fasilitas.update', $fasilitas->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="">Alquran</label>
                        <input type="number" class="form-control" id="alquran" name="alquran" value="<?php echo e($fasilitas->alquran); ?>" placeholder="Jumlah Alquran" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['alquran'];
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
                        <label for="">Mukenah</label>
                        <input type="number" class="form-control" id="mukenah" name="mukenah" value="<?php echo e($fasilitas->mukenah); ?>" placeholder="Jumlah Mukenah" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['mukenah'];
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
                        <label for="">Jumlah Sajadah</label>
                        <input type="number" class="form-control" id="sajadah" name="sajadah" value="<?php echo e($fasilitas->sajadah); ?>" placeholder="Jumlah Sajadah" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['sajadah'];
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
                        <label for="">Jumlah Tempat Wudhu</label>
                        <input type="number" class="form-control" id="tempat_wudhu" name="tempat_wudhu" value="<?php echo e($fasilitas->tempat_wudhu); ?>" placeholder="Jumlah Tempat Wudhu" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['tempat_wudhu'];
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
                        <label for="">Jumlah Keranda</label>
                        <input type="number" class="form-control" id="keranda" name="keranda" value="<?php echo e($fasilitas->keranda); ?>" placeholder="Jumlah Keranda" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['keranda'];
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
                        <label for="">Jumlah Kain Kafan</label>
                        <input type="number" class="form-control" id="kain_kafan" name="kain_kafan" value="<?php echo e($fasilitas->kain_kafan); ?>" placeholder="Jumlah Kain Kafan" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['kain_kafan'];
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
                        <label for="">Jumlah Ambulans</label>
                        <input type="number" class="form-control" id="ambulans" name="ambulans" value="<?php echo e($fasilitas->ambulans); ?>" placeholder="Jumlah Ambulans" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['ambulans'];
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



                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/admin/fasilitas/edit.blade.php ENDPATH**/ ?>
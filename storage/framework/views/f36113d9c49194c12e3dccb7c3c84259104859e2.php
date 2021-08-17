
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Edit Data Kegiatan</div> 
        </div>
            <form action="/kegiatan/update/<?php echo e($kegiatan->id); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                


                <div class="col-sm-12">
                    <label for="">Jam</label>
                    <input type="time" class="form-control" id="jam_mg" name="jam_mg" value="<?php echo e($kegiatan->jam_mg); ?>" placeholder="Hari">
                    <div class="text-danger">
                        <?php $__errorArgs = ['jam_mg'];
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

                <div class="col-sm-12">
                    <label for="">Hari</label>
                    <input type="text" class="form-control" id="hari_mg" name="hari_mg" value="<?php echo e($kegiatan->hari_mg); ?>" placeholder="Hari">
                    <div class="text-danger">
                        <?php $__errorArgs = ['hari_mg'];
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
        
                <div class="col-sm-12">
                    <label for="">Tanggal Kajian</label>
                    <input type="date" class="form-control" id="tgl_mg" name="tgl_mg" value="<?php echo e($kegiatan->tgl_mg); ?>" placeholder="Tanggal Kajian">
                    <div class="text-danger">
                        <?php $__errorArgs = ['tgl_mg'];
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
                
                <div class="col-sm-12">
                    <label for="">Tema Mingguan</label>
                    <input type="text" class="form-control" id="tema_mg" name="tema_mg" value="<?php echo e($kegiatan->tema_mg); ?>" placeholder="Tema Mingguan">
                    <div class="text-danger">
                        <?php $__errorArgs = ['tema_mg'];
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
        
                <div class="col-sm-12">
                    <label for="">Nama Penceramah</label>
                    <input type="text" class="form-control" id="penceramah_mg" name="penceramah_mg" value="<?php echo e($kegiatan->penceramah_mg); ?>" placeholder="Nama Penceramah">
                    <div class="text-danger">
                        <?php $__errorArgs = ['penceramah_mg'];
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
        
                <!--Bulanan-->

                <div class="col-sm-12">
                    <label for="">Jam</label>
                    <input type="time" class="form-control" id="jam_bln" name="jam_bln" value="<?php echo e($kegiatan->jam_bln); ?>" placeholder="Hari">
                    <div class="text-danger">
                        <?php $__errorArgs = ['jam_bln'];
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
        
                <div class="col-sm-12">
                    <label for="">Hari kajian bulanan</label>
                    <input type="text" class="form-control" id="hari_bln" name="hari_bln" value="<?php echo e($kegiatan->hari_bln); ?>" placeholder="Hari kajian bulanan">
                    <div class="text-danger">
                        <?php $__errorArgs = ['hari_bln'];
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
        
                <div class="col-sm-12">
                    <label for="">Tanggal Kajian</label>
                    <input type="date" class="form-control" id="tgl_bln" name="tgl_bln" value="<?php echo e($kegiatan->tgl_bln); ?>" placeholder="Tanggal Kajian">
                    <div class="text-danger">
                        <?php $__errorArgs = ['tgl_bln'];
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
        
                <div class="col-sm-12">
                    <label for="">Tema</label>
                    <input type="text" class="form-control" id="tema_bln" name="tema_bln" value="<?php echo e($kegiatan->tema_bln); ?>" placeholder="Tema">
                    <div class="text-danger">
                        <?php $__errorArgs = ['tema_bln'];
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
        
                <div class="col-sm-12">
                    <label for="">Penceramah Bulanan</label>
                    <input type="text" class="form-control" id="penceramah_bln" name="penceramah_bln" value="<?php echo e($kegiatan->penceramah_bln); ?>" placeholder="Penceramah Bulanan">
                    <div class="text-danger">
                        <?php $__errorArgs = ['penceramah_bln'];
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

                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\emasjid\resources\views/admin/kegiatan/edit.blade.php ENDPATH**/ ?>
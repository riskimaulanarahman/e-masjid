
<?php $__env->startSection('content'); ?>
    
<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Tambah data Fasilitas </div> 
        </div>

        <form action="/fasilitas/store" method="POST" enctype="multipart/form-data">
            
            <?php echo csrf_field(); ?>
            <div class="card-body">
                
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Masjid</label>
                                <select name="masjid_id" class="form-control" >
                                    <option value="">-- Pilih Nama Masjid --</option>
                                    <?php $__currentLoopData = $masjid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_masjid); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>       
                                <div class="text-danger">
                                    <?php $__errorArgs = ['id_masjid'];
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
                        <label for="">Jumlah Al-Quran</label>
                        <input type="text" class="form-control" id="alquran" name="alquran" placeholder="Jumlah Al-Quran" >
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
                            <label for="">Jumlah Mukennah</label>
                            <input type="text" class="form-control" id="mukenah" name="mukenah" placeholder="Jumlah Mukennah" >
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
                            <input type="text" class="form-control" id="sajadah" name="sajadah" placeholder="Jumlah Sajadah" >
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
                            <input type="text" class="form-control" id="tempat_wudhu" name="tempat_wudhu" placeholder="Jumlah Tempat Wudhu" >
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
                            <input type="text" class="form-control" id="keranda" name="keranda" placeholder="Jumlah Keranda" >
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
                            <input type="text" class="form-control" id="kain_kafan" name="kain_kafan" placeholder="Jumlah Kain Kafan" >
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
                            <input type="text" class="form-control" id="ambulans" name="ambulans" placeholder="Jumlah Ambulans" >
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
                <!--Akhir Fasilitas-->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                    </div>
                
            
            </div>
        </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/fasilitas/insert.blade.php ENDPATH**/ ?>
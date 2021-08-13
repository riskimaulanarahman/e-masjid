<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Tambah data kegiatan </div>
        </div>

        <form action="/kegiatan/store" method="POST" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="masjid_id">Nama Masjid</label>
                                <select name="masjid_id" class="form-control" >
                                    <option value="">-- Pilih Nama Masjid --</option>
                                    <?php $__currentLoopData = $masjid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($data->id); ?>"><?php echo e($data->nama_masjid); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <div class="text-danger">
                                    <?php $__errorArgs = ['id'];
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
                            <label for="">Jam</label>
                            <input type="time" class="form-control" id="jam_mg" name="jam_mg" placeholder="Hari">
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
                            
                            <select class="form-control" name="hari_mg" id="hari_mg" required>
                                <option value="">- pilih hari -</option>
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                <option value="minggu">minggu</option>
                            </select>
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
                            <input type="date" class="form-control" id="tgl_mg" name="tgl_mg" placeholder="Tanggal Kajian">
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
                            <input type="text" class="form-control" id="tema_mg" name="tema_mg" placeholder="Tema Mingguan">
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
                            <input type="text" class="form-control" id="penceramah_mg" name="penceramah_mg" placeholder="Nama Penceramah">
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
                            <input type="time" class="form-control" id="jam_bln" name="jam_bln" placeholder="Hari">
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
                            
                            <select class="form-control" name="hari_bln" id="hari_bln" required>
                                <option value="">- pilih hari -</option>
                                <option value="senin">senin</option>
                                <option value="selasa">selasa</option>
                                <option value="rabu">rabu</option>
                                <option value="kamis">kamis</option>
                                <option value="jumat">jumat</option>
                                <option value="sabtu">sabtu</option>
                                <option value="minggu">minggu</option>
                            </select>
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
                            <input type="date" class="form-control" id="tgl_bln" name="tgl_bln" placeholder="Tanggal Kajian">
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
                            <input type="text" class="form-control" id="tema_bln" name="tema_bln" placeholder="Tema">
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
                            <input type="text" class="form-control" id="penceramah_bln" name="penceramah_bln" placeholder="Penceramah Bulanan">
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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/admin/kegiatan/insert.blade.php ENDPATH**/ ?>
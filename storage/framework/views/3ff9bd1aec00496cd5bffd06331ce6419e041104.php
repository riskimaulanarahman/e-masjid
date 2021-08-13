
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
            <div class="card bg-primary text-white shadow">
                <div class="card-header bg-primary"> Tambah data Fasilitas </div>
            </div>

            <form action="/pengurus/store" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Nama Masjid</label>
                                <select name="masjid_id" class="form-control">
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
                            <label for="">Tahun Kepengerusan</label>
                            <input type="text" class="form-control" id="thn_kepengurusan" name="thn_kepengurusan" placeholder="Tahun Kepengurusan">
                            <div class="text-danger">
                                <?php $__errorArgs = ['thn_kepengurusan'];
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
                            <label for="">Dewan Pembina</label>
                            <input type="text" class="form-control" id="dewan_pembina" name="dewan_pembina" placeholder="Dewan Pembina">
                            <div class="text-danger">
                                <?php $__errorArgs = ['dewan_pembina'];
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
                            <label for="">Ketua</label>
                            <input type="text" class="form-control" id="ketua" name="ketua" placeholder="Ketua">
                            <div class="text-danger">
                                <?php $__errorArgs = ['ketua'];
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
                            <label for="">Sekertaris</label>
                            <input type="text" class="form-control" id="sekertaris" name="sekertaris" placeholder="Sekertaris">
                            <div class="text-danger">
                                <?php $__errorArgs = ['sekertaris'];
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
                            <label for="">Bendahara</label>
                            <input type="text" class="form-control" id="bendahara" name="bendahara" placeholder="Bendahara">
                            <div class="text-danger">
                                <?php $__errorArgs = ['bendahara'];
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
                            <label for="">Seksi Ibadah</label>
                            <input type="text" class="form-control" id="seksi_ibadah" name="seksi_ibadah" placeholder="Seksi Ibadah">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_ibadah'];
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
                            <label for="">Seksi Sarana</label>
                            <input type="text" class="form-control" id="seksi_sarana" name="seksi_sarana" placeholder="Seksi Sarana">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_sarana'];
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
                            <label for="">Seksi Pembina Wanita dan Anak</label>
                            <input type="text" class="form-control" id="seksi_pembinawanita" name="seksi_pembinawanita" placeholder="Seksi Pembina Wanita dan Anak">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_pembinawanita'];
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
                            <label for="">Seksi Pemuda</label>
                            <input type="text" class="form-control" id="seksi_pemuda" name="seksi_pemuda" placeholder="Seksi Pemuda">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_pemuda'];
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
                            <label for="">Seksi Fardhu Kifayah</label>
                            <input type="text" class="form-control" id="seksi_fadhukifayah" name="seksi_fadhukifayah" placeholder="Seksi Fardhu Kifayah">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_fadhukifayah'];
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
                            <label for="">Seksi Zakat</label>
                            <input type="text" class="form-control" id="seksi_zakat" name="seksi_zakat" placeholder="Seksi Zakat">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_zakat'];
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
                            <label for="">Seksi Qurban</label>
                            <input type="text" class="form-control" id="seksi_qurban" name="seksi_qurban" placeholder="Seksi Qurban">
                            <div class="text-danger">
                                <?php $__errorArgs = ['seksi_qurban'];
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

                        



                        <div class="card-footer">
                            <button type="submit" class="btn btn-flat btn-primary btn-sm mt-4 "><i class="fa fa-save"></i> Simpan</button>
                        </div>


                    </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/pengurus/insert.blade.php ENDPATH**/ ?>
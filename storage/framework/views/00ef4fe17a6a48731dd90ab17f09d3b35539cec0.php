
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Detail Data Kegiatan
            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->masjid->nama_masjid); ?></td>
                    </tr>


                    <tr>
                        <td>Hari</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->hari_mg); ?> , <?php echo e($kegiatan->tgl_mg); ?></td>
                    </tr>

                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->jam_mg); ?></td>
                    </tr>

                    <tr>
                        <td>Tema </td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->tema_mg); ?></td>
                    </tr>

                    <tr>
                        <td>Penceramah</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->penceramah_mg); ?></td>
                    </tr>

                    <tr>
                        <td>Hari / Tanggal</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->hari_bln); ?> , <?php echo e($kegiatan->tgl_bln); ?></td>
                    </tr>

                    <tr>
                        <td>Jam</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->jam_bln); ?></td>
                    </tr>

                    <tr>
                        <td>Tema</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->tema_bln); ?></td>
                    </tr>
                    <tr>
                        <td>Penceramah</td>
                        <td>:</td>
                        <td><?php echo e($kegiatan->penceramah_bln); ?></td>
                    </tr>

                    
            </table>
        </div>
    </div>     
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/kegiatan/detail.blade.php ENDPATH**/ ?>
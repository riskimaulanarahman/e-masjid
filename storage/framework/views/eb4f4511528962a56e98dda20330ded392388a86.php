
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Detail Data Fasilitas
            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->masjid->nama_masjid); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Alquran</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->alquran); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Mukennah</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->mukenah); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Sajadah</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->sajadah); ?></td>
                    </tr>

                    <tr>
                        <td>Tempat Wudhu</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->tempat_wudhu); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Keranda</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->keranda); ?></td>
                    </tr>

                    <tr>
                        <td>Kain Kafan</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->kain_kafan); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Ambulans</td>
                        <td>:</td>
                        <td><?php echo e($fasilitas->ambulans); ?></td>
                    </tr>

                    
            </table>
        </div>
    </div>     
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/fasilitas/detail.blade.php ENDPATH**/ ?>
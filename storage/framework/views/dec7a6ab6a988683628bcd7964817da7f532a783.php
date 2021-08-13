
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > <?php echo e($title); ?>

            
            </div> 
        </div>
        <div class="tab-content" id="nav-tabContent">
            <img src="<?php echo e(asset('foto')); ?>/<?php echo e($masjid->foto); ?>" width="100%" height="400px">
                <table class="table table-borderless ">
                    <tr>
                        <td>Nama Masjid</td>
                        <td>:</td>
                        <td><?php echo e($masjid->nama_masjid); ?></td>
                    </tr>

                    <tr>
                        <td>Kategory</td>
                        <td>:</td>
                        <td><?php echo e($masjid->kategori); ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo e($masjid->alamat); ?></td>
                    </tr>
                    <tr>
                        <td>Luas</td>
                        <td>:</td>
                        <td><?php echo e($masjid->luas); ?></td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td><?php echo e($masjid->kapasitas); ?></td>
                    </tr> 

                  
                    <tr>
                        <td>Kode Bank</td>
                        <td>:</td>
                        <td><?php echo e($masjid->kode_bank); ?></td>
                    </tr> 

                    <tr>
                        <td>Nama Bank</td>
                        <td>:</td>
                        <td><?php echo e($masjid->nama_bank); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Atas Nama</td>
                        <td>:</td>
                        <td><?php echo e($masjid->atasnama_rek); ?></td>
                    </tr>
                    
                    <tr>
                        <td>Nomor Rekening</td>
                        <td>:</td>
                        <td><?php echo e($masjid->no_rek); ?></td>
                    </tr> 
            </table> 
            <div class="bank mb-5 text-center bg-dark text-white " >
                <img  src="<?php echo e(asset('iconbank')); ?>/<?php echo e($masjid->icons); ?>" width="80px" height="60px">
                
                <td> a/n</td>
                <td><?php echo e($masjid->atasnama_rek); ?></td>
                <td><?php echo e($masjid->no_rek); ?></td>
            </div> 
           

        </div>
    </div>     
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/admin/masjid/detail.blade.php ENDPATH**/ ?>
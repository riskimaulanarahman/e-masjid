
<?php $__env->startSection('content'); ?>
<div class="row">
    
    <div class="btn">
        <a href="/kegiatan/insert" type="button" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
     </div>
    <div class="col-lg-12 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > Kegiatan
            
            </div> 
        </div>

        
        <div class="card-body">
            <?php if(session('pesan')): ?>
                <div class="alert alert-success" role="alert">
                   <?php echo e(session('pesan')); ?>

                </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead >
                            <tr >
                            <th width="30px" class="text-center">No</th>
                            <th class="text-center"  width="100px">Nama Masjid</th>
                            <th width="50px" class="text-center">Hari Kegiatan</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center" ><?php echo e($no++); ?></td>
                            <td><?php echo e($data->masjid->nama_masjid); ?></td>
                            <td ><?php echo e($data->hari_mg); ?></td>

                            <td class="text-center">
                                <a href="/kegiatan/detailkegiatan/<?php echo e($data->id); ?>" class="btn btn-sm btn-flat btn-success"><i class="fas fa-eye"></i></a>
                                <a href="/kegiatan/edit/<?php echo e($data->id); ?>" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                <a  class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete<?php echo e($data->id); ?>"><i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
             </div>
        </div>
    </div>
</div>

<?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="delete<?php echo e($data->id); ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title" style="color: red">Kegiatan <?php echo e($data->hari_mg); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black">
              <p>Apakah anda ingin menghapus data kegiatan <?php echo e($data->hari_mg); ?> ??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Keluar</button>
              <a href="/kegiatan/delete/<?php echo e($data->id); ?>" type="button" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/admin/kegiatan/index.blade.php ENDPATH**/ ?>
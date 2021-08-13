

<?php $__env->startSection('content'); ?>

<div class="row">
    
    <div class="btn">
        <a href="/kategory/tambah" type="button" class=" btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
     </div>
    <div class="col-lg-12 mb-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > <?php echo e($title); ?>

            
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
                            <th class="text-center">Kategory</th>
                            <th width="50px" class="text-center">Icon</th>
                            <th width="100px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center" ><?php echo e($no++); ?></td>
                            <td ><?php echo e($data->kategori); ?></td>
                            <td ><img src="<?php echo e(asset('iconkategori')); ?>/<?php echo e($data->icon); ?>" alt="" width="40px" height="40px"></td>
                            <td class="text-center">
                                <a href="/kategory/edit/<?php echo e($data->id); ?>" class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
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

<?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="modal fade" id="delete<?php echo e($data->id); ?>">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title" style="color: red"><?php echo e($data->kategori); ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="color: black">
              <p>Apakah anda ingin menghapus data <?php echo e($data->kategori); ?> ??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Keluar</button>
              <a href="/kategory/delete/<?php echo e($data->id); ?>" type="button" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/admin/kategory/index.blade.php ENDPATH**/ ?>
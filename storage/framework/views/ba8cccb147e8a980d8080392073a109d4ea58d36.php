
<?php $__env->startSection('content'); ?>
<div class="detailmasjid mt-5">
    <div class="container">
        <div class="row">
                <div class="col-md-6 ">
                    <h2><td><?php echo e($masjid->nama_masjid); ?></td></h2><hr>
                    <div class="mt-5">
                        <i class="fas fa-map-marker-alt"></i><td><?php echo e($masjid->alamat); ?></td><br><br>
                        <i class="fas fa-th-large"></i><td> <?php echo e($masjid->luas); ?> m<sup>2</sup> </td><br><br>
                        <i class="fas fa-tags"></i><td><td> <?php echo e($masjid->kategori); ?></td><br><br>
                        <a href="<?php echo e($masjid->peta); ?>" class="btn btn-success petunjuk"><i class="fas fa-map"></i> Peta</a>
                        <a href="<?php echo e($masjid->petunjuk_arah); ?>" class="btn btn-primary petunjuk"><i class="fas fa-road"></i> Petunjuk arah</a> <br><br>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo e(asset('foto')); ?>/<?php echo e($masjid->foto); ?>" width="100%" height="400px">
                </div>
                <div class="col-md-12 mt-5 ">
                    <div class="row justify-content-center text-white text-center">
                        <div class="fasilitas card text-center ml-4" >
                            <h4 class="mt-3">Kapasitas</h4>
                            <p class="card-text text-center"><?php echo e($masjid->kapasitas); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Alquran</h4>
                            <p class="card-text text-center"><?php echo e($fas ->alquran); ?></p>
                        </div>
                        
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Mukenah</h4>
                            <p class="card-text text-center"><?php echo e($masjid->mukenah); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Sajadah</h4>
                            <p class="card-text text-center"><?php echo e($masjid->sajadah); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Tempat wudhu</h4>
                            <p class="card-text text-center"><?php echo e($masjid->tempat_wudhu); ?></p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <nav>
                        <div class="nav nav-tab "  id="nav-tab">
                            <a class="nav-item nav-link active" style="color: #000000 !important" id="nav-home-tab" data-toggle="tab" href="#umum" role="tab">Kegiatan</a>
                            <a class="nav-item nav-link"  style="color: #000000 !important" id="nav-profil-tab" data-toggle="tab" href="#jadwal" role="tab">Pengurus</a>
                            <a class="nav-item nav-link"  style="color: #000000 !important" id="nav-kontak-tab" data-toggle="tab" href="#info" role="tab">Info</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="umum" role="tabpanel">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Hari/Tanggal</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->hari_mg); ?>/<?php echo e($masjid->tgl_mg); ?></td>
                                </tr>
                                <tr>
                                    <td>Tema</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->tema_mg); ?></td>
                                </tr>
                                <tr>
                                    <td>Penceramah</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->penceramah_mg); ?></td>
                                </tr>
                                <tr>
                                    
                                    <hr>
                                    <td>Hari/Tanggal</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->hari_bln); ?>/<?php echo e($masjid->tgl_bln); ?></td>
                                </tr>
                                <tr>
                                    <td>Tema</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->tema_bln); ?></td>
                                </tr>
                                <tr>
                                    <td>Penceramah</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->penceramah_bln); ?></td>
                                </tr>
                                
                            </table>
                        </div>
                        <div class="tab-pane fade" id="jadwal" role="tabpanel">
                            <table class="table table-borderless">
                                <tr class="text-center">
                                    <td><?php echo e($masjid->thn_kepengurusan); ?></td>
                                </tr>
                                <tr>
                                    <td>Dewan Pembina</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->dewan_pembina); ?></td>
                                </tr>
                                <tr>
                                    <td>Ketua</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->ketua); ?></td>
                                </tr>
                                <tr>
                                    <td>Sekertaris</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->sekertaris); ?></td>
                                </tr>

                                <tr>
                                    <td>Bendahara</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->bendahara); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Ibadah</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_ibadah); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Sarana</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_sarana); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Pembina Wanita dan Anak</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_pembinawanita); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Fardhu Kifayah</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_fadhukifayah); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Sarana</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_zakat); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Qurban</td>
                                    <td>:</td>
                                    <td><?php echo e($masjid->seksi_qurban); ?></td>
                                </tr>
                                
                                

                            </table>
                        </div>
                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <table class="table table-borderless">
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
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\masjid_balikpapan\resources\views/detailmasjid.blade.php ENDPATH**/ ?>
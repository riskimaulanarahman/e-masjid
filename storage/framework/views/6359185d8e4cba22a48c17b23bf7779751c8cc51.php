<?php $__env->startSection('content'); ?>
<div class="detailmasjid mt-5">
    <div class="container">
        <div class="row">
                <div class="col-md-6 ">
                    <h2><td><?php echo e($data->nama_masjid); ?></td></h2><hr>
                    <div class="mt-5">
                        <i class="fas fa-map-marker-alt"></i><td><?php echo e($data->alamat); ?></td><br><br>
                        <i class="fas fa-th-large"></i><td> <?php echo e($data->luas); ?> m<sup>2</sup> </td><br><br>
                        <i class="fas fa-tags"></i><td><td> <?php echo e($data->kategory->kategori); ?></td><br><br>
                        <a href="<?php echo e($data->peta); ?>" target="_blank" class="btn btn-success petunjuk"><i class="fas fa-map"></i> Peta</a>
                        <a href="<?php echo e($data->petunjuk_arah); ?>" target="_blank" class="btn btn-primary petunjuk"><i class="fas fa-road"></i> Petunjuk arah</a> <br><br>

                    </div>
                </div>
                <div class="col-md-6">
                    <img src="<?php echo e(asset('foto')); ?>/<?php echo e($data->foto); ?>" width="100%" height="400px">
                </div>
                <div class="col-md-12 mt-5 ">
                    <div class="row justify-content-center text-white text-center">
                        <div class="fasilitas card text-center ml-4" >
                            <h4 class="mt-3">Kapasitas</h4>
                            <p class="card-text text-center"><?php echo e($data->kapasitas); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Alquran</h4>
                            <p class="card-text text-center"><?php echo e($data->fasilitas[0]->alquran); ?></p>
                        </div>

                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Mukenah</h4>
                            <p class="card-text text-center"><?php echo e($data->fasilitas[0]->mukenah); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Sajadah</h4>
                            <p class="card-text text-center"><?php echo e($data->fasilitas[0]->sajadah); ?></p>
                        </div>
                        <div class="fasilitas card text-center ml-4">
                            <h4 class="mt-3">Tempat wudhu</h4>
                            <p class="card-text text-center"><?php echo e($data->fasilitas[0]->tempat_wudhu); ?></p>
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
                                    <td><?php echo e($data->kegiatan[0]->hari_mg); ?>/<?php echo e($data->kegiatan[0]->tgl_mg); ?></td>
                                </tr>
                                <tr>
                                    <td>Tema</td>
                                    <td>:</td>
                                    <td><?php echo e($data->kegiatan[0]->tema_mg); ?></td>
                                </tr>
                                <tr>
                                    <td>Penceramah</td>
                                    <td>:</td>
                                    <td><?php echo e($data->kegiatan[0]->penceramah_mg); ?></td>
                                </tr>
                                <tr>

                                    <hr>
                                    <td>Hari/Tanggal</td>
                                    <td>:</td>
                                    <td><?php echo e($data->kegiatan[0]->hari_bln); ?>/<?php echo e($data->kegiatan[0]->tgl_bln); ?></td>
                                </tr>
                                <tr>
                                    <td>Tema</td>
                                    <td>:</td>
                                    <td><?php echo e($data->kegiatan[0]->tema_bln); ?></td>
                                </tr>
                                <tr>
                                    <td>Penceramah</td>
                                    <td>:</td>
                                    <td><?php echo e($data->kegiatan[0]->penceramah_bln); ?></td>
                                </tr>

                            </table>
                        </div>
                        <div class="tab-pane fade" id="jadwal" role="tabpanel">
                            <table class="table table-borderless">
                                <tr class="text-center">
                                    <td><?php echo e($data->pengurus[0]->thn_kepengurusan); ?></td>
                                </tr>
                                <tr>
                                    <td>Dewan Pembina</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->dewan_pembina); ?></td>
                                </tr>
                                <tr>
                                    <td>Ketua</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->ketua); ?></td>
                                </tr>
                                <tr>
                                    <td>Sekertaris</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->sekertaris); ?></td>
                                </tr>

                                <tr>
                                    <td>Bendahara</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->bendahara); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Ibadah</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_ibadah); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Sarana</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_sarana); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Pembina Wanita dan Anak</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_pembinawanita); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Fardhu Kifayah</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_fadhukifayah); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Sarana</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_zakat); ?></td>
                                </tr>
                                <tr>
                                    <td>Seksi Qurban</td>
                                    <td>:</td>
                                    <td><?php echo e($data->pengurus[0]->seksi_qurban); ?></td>
                                </tr>



                            </table>
                        </div>
                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>:</td>
                                    <td><?php echo e($data->bank->nama_bank); ?></td>
                                </tr>
                                <tr>
                                    <td>Atas Nama</td>
                                    <td>:</td>
                                    <td><?php echo e($data->infaq->atasnama_rek); ?></td>
                                </tr>
                                <tr>
                                    <td>Nomor Rekening</td>
                                    <td>:</td>
                                    <td><?php echo e($data->infaq->no_rek); ?></td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/detailmasjid.blade.php ENDPATH**/ ?>
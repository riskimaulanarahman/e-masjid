
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card card-outline card-primary">
        <div class="card bg-primary text-white shadow">
            <div class="card-header bg-primary" > <?php echo e($title); ?></div> 
        </div>
        <form id="regForm" action="/masjid/insert" method="POST" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
            <div class="card-body" style="color: black">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label for="">Nama Masjid</label>
                        <input type="text" class="form-control" id="nama_masjid" name="nama_masjid" placeholder="Nama masjid" >
                        <div class="text-danger">
                            <?php $__errorArgs = ['nama_masjid'];
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
                        <div class="form-group">
                            <label for="">Nama Kategory</label>
                            <select name="id_kategory" class="form-control" >
                                <option value="">-- Pilih Kategory --</option>
                                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_kategory); ?>"><?php echo e($data->kategori); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>       
                            <div class="text-danger">
                                <?php $__errorArgs = ['id_kategory'];
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
                            <label for="">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat masjid" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['alamat'];
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
                            <label for="">Posisi Masjid</label>
                            <input type="text" class="form-control"  id="posisi" name="posisi" placeholder="Posisi masjid" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['posisi'];
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
                        <div id="map" style="width: 100%; height: 400px;"></div>
                    </div>
            
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Petunjuk Arah</label>
                            <input type="text" class="form-control"  id="petunjuk_arah" name="petunjuk_arah" placeholder="Petunjuk Arah" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['petunjuk_arah'];
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
                            <label for="">Peta</label>
                            <input type="text" class="form-control"  id="peta" name="peta" placeholder="Peta" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['peta'];
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
                            <label for="">Foto</label><br>
                            <input type="file" id="foto" name="foto"  accept="image/png,image/jpeg">
                            <div class="text-danger">
                                <?php $__errorArgs = ['foto'];
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
                            <label for="">Kapasitas Masjid</label>
                            <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas masjid" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['kapasitas'];
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
                            <label for="">Luas Masjid</label>
                            <input type="text" class="form-control" id="luas" name="luas" placeholder="Luas masjid" >
                            <div class="text-danger">
                                <?php $__errorArgs = ['luas'];
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
                    
                    </div>

                
            
            
                <!--Infaq-->
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="">Nama Bank</label>
                            <select name="id_bank" class="form-control" >
                                <option value="">-- Pilih Nama Bank --</option>
                                <?php $__currentLoopData = $bank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id_bank); ?>"><?php echo e($data->nama_bank); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>       
                            <div class="text-danger">
                                <?php $__errorArgs = ['id_bank'];
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
                        <label for="">Atas Nama</label>
                        <input type="text" class="form-control" id="atasnama_rek" name="atasnama_rek" placeholder="Atas Nama">
                        <div class="text-danger">
                            <?php $__errorArgs = ['atasnama_rek'];
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
                        <label for="">Nomor Rekening</label>
                        <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="Nomor Rekening">
                        <div class="text-danger">
                            <?php $__errorArgs = ['no_rek'];
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



<script>

    var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11'
	});

    var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/satellite-v9'
    });


    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
    });
    var map = L.map('map', {
    center: [-1.2603005593876762,116.86923265457155], //latitude and longitude
    zoom: 10, //zoom 
    layers: [peta1], //jenis maps 1
    });

    //jenis maps 
    var baseMaps = {
    "Streets": peta1,
    "Hybrid" : peta2,
    "satellite": peta3,
    "Terrain": peta4,
    };

    
    // control maps
    L.control.layers(baseMaps).addTo(map);

    // mengambil titik kordinat 
    var curLocation = [-1.2603005593876762,116.86923265457155];
    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable : 'true',
    });
    map.addLayer(marker);

    //ambil koordinat saat marker drag and drop 
    marker.on('dragend', function(event){
        var position = marker.getLatLng();
        marker.setLatLng(position,{
            draggable : 'true',
        }).bindPopup(position).update();
        $("#posisi").val(position.lat + "," +position.lng).keyup();
    });

    // ambil koordinat saat maps di klik
    var posisi = document.querySelector("[name = posisi]");
    map.on("click", function(event){
        var lat = event.latlng.lat;
        var lng = event.latlng.lng;
      
        
        if (!marker) {
            marker = L.marker(event.latlng).addTo(map);
            
        }else{
            marker.setLatLng(event.latlng);
        }
        posisi.value = lat + "," + lng;
    })




// akhir script section
</script>

    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\emasjid\resources\views/admin/masjid/add.blade.php ENDPATH**/ ?>
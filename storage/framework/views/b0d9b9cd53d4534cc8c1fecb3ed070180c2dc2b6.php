

<?php $__env->startSection('content'); ?>
<!--Grafik-->
<div class="banner" id="banner" >
    <div class="container">    
        <div class="row">
            <div class="col-sm-6 pb-3" style="background-color: skyblue">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        <h3 class= panel-title> Grafik </h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="myChart" width="400px" height="200px" ></canvas>
                    </div>
                </div>
            </div>
        <div class="col-md-6">
            <div class="panel mt-2 panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Jumlah Berdasarkan Kategory</h3>
                </div>
        
                <div class="panel-body">
                    <table class="table table-striped table hover">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php $jml=0; ?>
                            <?php $__currentLoopData = $kategoryCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                            <tr>
                                <td><?php echo e($cc->kategori); ?></td>
                                <td><?php echo e($cc->jml); ?></td>
                            </tr>
                            <?php $jml+=$cc->jml; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><strong>Total</strong></td>
                                <td><strong><?php echo e($jml); ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!--Akhir Grafik-->


<!--Maps-->
<div class="map justify-content-center">
    <div class="container offset-1 text-center ">
        <h4 class="judul">Peta Persebaran Masjid</h4>
        <p class="isi">Melihat lokasi persebaran masjid di balikpapan</p>
        <div id="map" style="width: 100%; height: 500px;"></div>
    </div>
</div>
<!--Akhir Maps-->


<!--Maps-->
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
    center: [-1.2456988,116.8412272],
    zoom: 13,
    layers: [peta1]
    });

    var baseMaps = {
    "Grayscale": peta1,
    "Setellite": peta2,
    "Streets": peta3,
    "Dark": peta4,
    };

    L.control.layers(baseMaps).addTo(map);

    <?php $__currentLoopData = $masjid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    var greenIcon = L.icon({
    iconUrl: '<?php echo e(asset('iconkategori')); ?>/<?php echo e($data->icon); ?>',
    iconSize:     [38, 45], // size of the icon
    });

    var informasi = '<table><tr><th colspan="2" class="text-center"><img src="<?php echo e(asset('foto')); ?>/<?php echo e($data->foto); ?>" width="120px" ></th></tr><tbody><tr><td colspan="2"><?php echo e($data->nama_masjid); ?></td></tr><tr><td colspan="2" class="text-center"><a href="/detailmasjid/<?php echo e($data->id); ?>" class= "btn btn-sm btn-primary text-white">Detail</td></tr></tbody></table>';

	L.marker([<?= $data->posisi ?>], {icon: greenIcon}).addTo(map).bindPopup(informasi);
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script type="text/javascript">
    var ctx = document.getElementById("myChart").getContext('2d');
    <?php if($grafik!=null): ?>
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo $grafik['labels']; ?>,
            datasets: [{
                label: 'Kategori',
                data: <?php echo e($grafik['data']); ?>,
                backgroundColor: <?php echo $grafik['backgroundColor']; ?>,
                borderColor: <?php echo $grafik['backgroundColor']; ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    <?php endif; ?>
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\emasjid\resources\views/web.blade.php ENDPATH**/ ?>
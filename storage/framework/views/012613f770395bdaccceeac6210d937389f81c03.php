<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                <h3 class= panel-title> Grafik </h3>
            </div>
            <div class="panel-body">
                <canvas id="myChart" width="400" height="200" ></canvas>
            </div>
        </div>
    </div>
<div class="col-md-6">
    <div class="panel panel-primary">
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

<script>
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
</script>

  <!-- Page level plugins -->
  <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/demo/chart-bar-demo.js')); ?>"></script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Downloads/UM/masjid_balikpapan/resources/views/home.blade.php ENDPATH**/ ?>
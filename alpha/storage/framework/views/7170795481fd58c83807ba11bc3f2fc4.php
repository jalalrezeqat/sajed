<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">عدد المشتركين بدورات<i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo e($sumstudantinsubs); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">عدد منشئي الحسابات <i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo e($user); ?></h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3"> عدد المستخدمين النشطين حاليا وقبل ٣٠ دقيقة<i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5"><?php echo e($countonline->count()); ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left ">عدد زوار الموقع </h4>
                            <div id="visit-sale-chart-legend"
                                class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                        </div>
                        <div style="width: 100%; margin: auto;">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div style="width: 100%; margin: auto;">
                            <canvas id="pieChart"></canvas>
                        </div>
                        <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var ctx = document.getElementById('pieChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: <?php echo json_encode($data['labels'], 15, 512) ?>,
                    datasets: [{
                        data: <?php echo json_encode($data['data'], 15, 512) ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.7)',
                            'rgba(54, 162, 235, 0.7)',
                            'rgba(255, 206, 86, 0.7)',
                            'rgba(75, 192, 192, 0.7)',
                            'rgba(153, 102, 255, 0.7)',
                            'rgba(199, 16, 255, 0.7)',
                            'rgba(111, 133, 255, 0.7)',
                            'rgba(32, 13, 255, 0.7)',
                            'rgba(55, 121, 255, 0.7)',
                            'rgba(70, 22, 255, 0.7)',
                            'rgba(22, 99, 255, 0.7)',
                            'rgba(90, 9, 255, 0.7)',




                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(199, 16, 255, 1)',
                            'rgba(111, 133, 255, 1)',
                            'rgba(32, 13, 255, 1)',
                            'rgba(55, 121, 255, 1)',
                            'rgba(223, 44, 255, 1)',
                            'rgba(120, 99, 255, 1)',
                            'rgba(10, 244, 255, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
            });
        </script>
        <script>
            var ctx = document.getElementById('barChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo json_encode($data1['labels'], 15, 512) ?>,
                    datasets: [{
                        label: 'Data',
                        data: <?php echo json_encode($data1['data'], 15, 512) ?>,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/sajed/alpha/resources/views/admin/layouts/dashboard.blade.php ENDPATH**/ ?>
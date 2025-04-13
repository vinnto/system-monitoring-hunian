

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Dashboards'); ?>

    
    <?php echo app('translator')->get('translation.Flot_Charts'); ?>

    
    <?php echo app('translator')->get('translation.Apex_Charts'); ?>

    
    <?php echo app('translator')->get('translation.Toast_UI_Charts'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- tui charts Css -->
    <link href="<?php echo e(URL::asset('build/libs/tui-chart/tui-chart.min.css')); ?>" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard/style.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Dashboards
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Dashboard
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Total PM</p>
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-user font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Samawa Nuansa Pondok Kelapa</p>
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-buildings font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Swasana Nuansa Pondok</p>
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-buildings font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Kanaya Nuansa Cilangkap</p>
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-buildings font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">Bunaken Sentraland Cenkareng
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-buildings font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium">A4 dan A5 Bandar Kemayoran</p>
                            <h4 class="mb-0">0000</h4>
                        </div>
                        <div class="flex-shrink-0 align-self-center">
                            <div class="avatar-sm rounded-circle bg-primary">
                                <span class="avatar-title">
                                    <i class="bx bx-buildings font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <!-- Pie Chart -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Status Monitoring</h4>

                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <h5 class="mb-0">86541</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">2541</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">102030</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>

                    <div id="pie-chart">
                        <div id="pie-chart-container" data-colors='["--bs-primary","--bs-success", "--bs-light"]'
                            class="flot-charts flot-charts-height">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashed Line -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Perkembangan Ketaatan</h4>

                    <div id="line_chart_dashed" data-colors='["--bs-success", "--bs-danger", "--bs-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- Email Sent -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-4">Hasil Penilaian Ketaatan</h4>

                    </div>

                    <div id="stacked-column-chart" data-colors='["--bs-primary", "--bs-warning", "--bs-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <!-- Pie Chart 1 -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Status Klarifikasi</h4>
                    <div id="pie-chart-1"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- Pie Chart 2 -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Alasan Tidak Menghuni</h4>
                    <div id="pie-chart-2"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- Pie Chart 3 -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Tempat Tinggal Saat ini</h4>
                    <div id="pie-chart-3"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard.init.js')); ?>"></script>

    
    <!-- flot plugins -->
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.selection.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot.curvedLines/curvedLines.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/flot-charts/jquery.flot.crosshair.js')); ?>"></script>
    <!-- flot init -->
    <script src="<?php echo e(URL::asset('build/js/pages/flot.init.js')); ?>"></script>

    
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('build/js/pages/apexcharts.init.js')); ?>"></script>

    
    <!-- tui charts plugins -->
    <script src="<?php echo e(URL::asset('build/libs/tui-chart/tui-chart-all.min.js')); ?>"></script>
    <!-- tui charts map -->
    <script src="<?php echo e(URL::asset('build/libs/tui-chart/maps/usa.js')); ?>"></script>
    <!-- tui charts plugins -->
    <script src="<?php echo e(URL::asset('build/js/pages/tui-charts.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\index.blade.php ENDPATH**/ ?>
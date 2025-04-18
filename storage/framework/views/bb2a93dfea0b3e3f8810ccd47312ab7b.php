<?php $__env->startSection('title'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- tui charts css -->
    <link href="<?php echo e(URL::asset('build/libs/tui-chart/tui-chart.min.css')); ?>" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard/admin-dashboard.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Home
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Dashboard
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the year</option>
                                <option value="Full Time">2025</option>
                                <option value="Part Time">2026</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the semester</option>
                                <option value="Full Time">Semester 1</option>
                                <option value="Part Time">Semester 2</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the tower</option>
                                <option value="Full Time">Samawa</option>
                                <option value="Part Time">Swasana</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3 text-end">
                            <button type="button" class="btn btn-soft-primary w-100 w-md-auto" onclick="filterData();">
                                <span class="d-none d-md-inline">Filter</span> <i
                                    class="mdi mdi-filter-outline align-middle"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <h4 class="mb-3 text-success">
            <i class="bx bx-bar-chart-alt-2 me-2"></i>
            <span class="fw-semibold" style="font-size: 1.25rem;">Monitoring Hunian</span>
        </h4>
        <!-- Status Monitoring -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Status Monitoring</h4>
                    <div id="pie-chart-1" class="chart-container" data-colors='["#34c38f", "#f46a6a"]'></div>
                </div>
            </div>
        </div>
        <!-- Perkembangan Ketaatan -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Perkembangan Ketaatan</h4>

                    <div id="line_chart_dashed" data-colors='["--bs-success", "--bs-warning", "--bs-danger"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!-- Hasil Penilaian Ketaatan -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-5">Hasil Penilaian Ketaatan</h4>
                    </div>

                    <div id="stacked-column-chart" data-colors='["--bs-success", "--bs-warning", "--bs-danger"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h4 class="mb-3 text-success d-flex align-items-center">
            <i class="bx bx-message-square-detail me-2 fs-4"></i>
            <span class="fw-semibold" style="font-size: 1.25rem;">Klarifikasi</span>
        </h4>

        <!-- Status Pemanggilan -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Status Pemanggilan</h4>
                    <div id="pie-chart-2" class="chart-container" data-colors='["#34c38f","#f1b44c", "#f46a6a"]'>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alasan Tidak Menghuni -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Alasan Tidak Menghuni</h4>
                    <div id="pie-chart-3" class="chart-container" data-colors='["#34c38f","#556ee6", "#f1b44c", "#6c757d"]'>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tempat Tinggal Saat Ini -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Tempat Tinggal Saat Ini</h4>
                    <div id="pie-chart-4" class="chart-container" data-colors='["#34c38f","#556ee6", "#f1b44c"]'>
                    </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views/pages/admin/index.blade.php ENDPATH**/ ?>
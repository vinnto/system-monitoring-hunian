

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Flot_Charts'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Charts
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Flot Charts
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Multiple Statistics</h4>

                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <h5 class="mb-0">362411</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">8489</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">985412</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>

                    <div id="website-stats" data-colors='["--bs-light","--bs-primary", "--bs-success"]'
                        class="flot-charts flot-charts-height"></div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Realtime Statistics</h4>

                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <h5 class="mb-0">365214</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">6521</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">44587</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>

                    <div id="flotRealTime" data-colors='["--bs-success"]' class="flot-charts flot-charts-height"></div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Donut Pie</h4>

                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <h5 class="mb-0">5484</h5>
                            <p class="text-muted text-truncate">Activated</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">964984</h5>
                            <p class="text-muted text-truncate">Pending</p>
                        </div>
                        <div class="col-4">
                            <h5 class="mb-0">98498</h5>
                            <p class="text-muted text-truncate">Deactivated</p>
                        </div>
                    </div>

                    <div id="donut-chart">
                        <div id="donut-chart-container" data-colors='["--bs-light","--bs-primary", "--bs-success"]'
                            class="flot-charts flot-charts-height">
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title mb-4">Pie Chart</h4>

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
        </div> <!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\charts-flot.blade.php ENDPATH**/ ?>
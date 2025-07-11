

<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Range_Slider'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- ION Slider -->
<link href="<?php echo e(URL::asset('build/libs/ion-rangeslider/css/ion.rangeSlider.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> UI Elements <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Range Slider <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">ION Range slider</h4>
                <p class="card-title-desc">Cool, comfortable, responsive and easily customizable range slider</p>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Default</h5>
                            <input type="text" id="range_01">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Min-Max</h5>
                            <input type="text" id="range_02">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Prefix</h5>
                            <input type="text" id="range_03">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Range</h5>
                            <input type="text" id="range_04">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Step</h5>
                            <input type="text" id="range_05">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Custom Values</h5>
                            <input type="text" id="range_06">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Prettify Numbers</h5>
                            <input type="text" id="range_07">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Disabled</h5>
                            <input type="text" id="range_08">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Extra Example</h5>
                            <input type="text" id="range_09">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Use decorate_both option</h5>
                            <input type="text" id="range_10">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Postfixes</h5>
                            <input type="text" id="range_11">
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="p-3">
                            <h5 class="font-size-14 mb-3">Hide</h5>
                            <input type="text" id="range_12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Ion Range Slider-->
<script src="<?php echo e(URL::asset('build/libs/ion-rangeslider/js/ion.rangeSlider.min.js')); ?>"></script>

<!-- Range slider init js-->
<script src="<?php echo e(URL::asset('build/js/pages/range-sliders.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\ui-rangeslider.blade.php ENDPATH**/ ?>
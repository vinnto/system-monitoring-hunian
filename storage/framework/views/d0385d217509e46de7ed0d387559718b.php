

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Invoice_Detail'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Invoices
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Invoice Detail
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <h4 class="float-end font-size-16">Order # 12345</h4>
                        <div class="auth-logo mb-4">
                            <img src="<?php echo e(URL::asset('build/images/logo-dark.png')); ?>" alt="logo" class="auth-logo-dark" height="20" />
                            <img src="<?php echo e(URL::asset('build/images/logo-light.png')); ?>" alt="logo" class="auth-logo-light" height="20" />
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                <strong>Billed To:</strong><br>
                                John Smith<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Springfield, ST 54321
                            </address>
                        </div>
                        <div class="col-sm-6 text-sm-end">
                            <address class="mt-2 mt-sm-0">
                                <strong>Shipped To:</strong><br>
                                Kenny Rigdon<br>
                                1234 Main<br>
                                Apt. 4B<br>
                                Springfield, ST 54321
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mt-3">
                            <address>
                                <strong>Payment Method:</strong><br>
                                Visa ending **** 4242<br>
                                jsmith@email.com
                            </address>
                        </div>
                        <div class="col-sm-6 mt-3 text-sm-end">
                            <address>
                                <strong>Order Date:</strong><br>
                                October 16, 2019<br><br>
                            </address>
                        </div>
                    </div>
                    <div class="py-2 mt-3">
                        <h3 class="font-size-15 fw-bold">Order summary</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">No.</th>
                                    <th>Item</th>
                                    <th class="text-end">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>Skote - Admin Dashboard Template</td>
                                    <td class="text-end">$499.00</td>
                                </tr>

                                <tr>
                                    <td>02</td>
                                    <td>Skote - Landing Template</td>
                                    <td class="text-end">$399.00</td>
                                </tr>

                                <tr>
                                    <td>03</td>
                                    <td>Veltrix - Admin Dashboard Template</td>
                                    <td class="text-end">$499.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-end">Sub Total</td>
                                    <td class="text-end">$1397.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-end">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td class="border-0 text-end">$13.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="border-0 text-end">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="border-0 text-end">
                                        <h4 class="m-0">$1410.00</h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light me-1"><i
                                    class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary w-md waves-effect waves-light">Send</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\invoices-detail.blade.php ENDPATH**/ ?>
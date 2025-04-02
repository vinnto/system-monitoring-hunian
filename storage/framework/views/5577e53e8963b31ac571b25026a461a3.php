

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Job_List'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <!-- bootstrap-datepicker css -->
    <link href="<?php echo e(URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet"
        type="text/css">

    <!-- DataTables -->
    <link href="<?php echo e(URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo e(URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>"
        rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Monitoring
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Monitoring Hunian
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Monitoring Hunian</h5>
                        <div class="col-xxl-2 col-lg-4">
                            <button type="button" class="btn btn-soft-primary w-100" onclick="filterData();"><i
                                    class="mdi mdi-filter-outline align-middle"></i> Filter</button>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div class="row g-3">
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Semua Lokasi</option>
                                <option value="Full Time">Samawa Nuansa Pondok Kelapa</option>
                                <option value="Part Time">Swasana Nuansa Pondok</option>
                                <option value="Part Time">Kanaya Nuansa Cilangkap</option>
                                <option value="Part Time">Bunaken Sentraland Cenkareng</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-6">
                            <select class="form-select" id="idStatus" aria-label="Default select example">
                                <option value="all">Pilih Tower</option>
                                <option value="Active">Samawa</option>
                                <option value="New">Swasana</option>
                                <option value="Close">Kanaya</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Pilih Lantai</option>
                                <option value="Full Time">1</option>
                                <option value="Part Time">2</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Pilih No. Unit</option>
                                <option value="Full Time">1</option>
                                <option value="Part Time">2</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Periode</option>
                                <option value="Full Time">2025 Semester 1</option>
                                <option value="Part Time">2025 Semester 2</option>
                            </select>
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Status Ketaatan</option>
                                <option value="Full Time">Aktif</option>
                                <option value="Part Time">Buyback</option>
                                <option value="Part Time">Meninggal</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle dt-responsive nowrap w-100 table-check">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tower</th>
                                    <th scope="col">Lantai</th>
                                    <th scope="col">No. Unit</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Status Ketaatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nuansa Pondok Kelapa</td>
                                    <td>Samawa</td>
                                    <td>01</td>
                                    <td>02</td>
                                    <td>36</td>
                                    <td><span class="badge bg-warning">Terindikasi</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.detail.hunian')); ?>" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline font-size-15"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

    </div>
    <!--end row-->

    <!-- Modal -->
    <div class="modal fade" id="jobDelete" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body px-4 py-5 text-center">
                    <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="avatar-sm mb-4 mx-auto">
                        <div class="avatar-title bg-primary text-primary bg-opacity-10 font-size-20 rounded-3">
                            <i class="mdi mdi-trash-can-outline"></i>
                        </div>
                    </div>
                    <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently erase the job.</p>

                    <div class="hstack gap-2 justify-content-center mb-0">
                        <button type="button" class="btn btn-danger">Delete Now</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- bootstrap-datepicker js -->
    <script src="<?php echo e(URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>

    <!-- Required datatable js -->
    <script src="<?php echo e(URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

    <!-- job-list init -->
    <script src="<?php echo e(URL::asset('build/js/pages/job-list.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\system-monitoring-hunian\resources\views/pages/admin/monitoring-hunian.blade.php ENDPATH**/ ?>
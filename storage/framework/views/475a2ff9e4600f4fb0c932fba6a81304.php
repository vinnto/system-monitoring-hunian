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
            Status Penerima Manfaat
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Tabel Status Penerima Manfaat
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Daftar Status PM</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addStatusPenerimaManfaatModal">
                                <i class="bx bx-plus me-1"></i> Tambah Status PM
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table align-middle dt-responsive nowrap w-100 table-check">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Status Penerima Manfaat</th>
                                    <th scope="col" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $status_penerima_manfaats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status_pm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($status_pm->id); ?></td>
                                        <td><?php echo e($status_pm->status_pm); ?></td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button class="btn btn-sm btn-soft-success edit-btn" data-bs-toggle="modal"
                                                    data-bs-target="#editStatusPenerimaManfaatModal"
                                                    data-id="<?php echo e($status_pm->id); ?>"
                                                    data-status_pm="<?php echo e($status_pm->status_pm); ?>"
                                                    data-url="<?php echo e(route('status-pm.update', $status_pm->id)); ?>">
                                                    <i class="bx bx-edit font-size-20"></i>
                                                </button>
                                                <button class="btn btn-sm btn-soft-danger delete-btn" data-bs-toggle="modal"
                                                    data-bs-target="#deleteStatusPenerimaManfaatModal"
                                                    data-id="<?php echo e($status_pm->id); ?>"
                                                    data-url="<?php echo e(route('status-pm.destroy', $status_pm->id)); ?>">
                                                    <i class="bx bx-trash font-size-20"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Status Penerima Manfaat Modal -->
    <div class="modal fade" id="addStatusPenerimaManfaatModal" tabindex="-1"
        aria-labelledby="addStatusPenerimaManfaatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addStatusPenerimaManfaatModalLabel">Tambah Status PM Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addStatusPenerimaManfaatForm" action="<?php echo e(route('status-pm.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="status_pm">Status Penerima Manfaat</label>
                            <select name="status_pm" class="form-control" required>
                                <option value="">Pilih Status PM</option>
                                <option value="restru">Restru</option>
                                <option value="buyback">Buyback</option>
                                <option value="meninggal">Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Status Penerima Manfaat Modal -->
    <div class="modal fade" id="editStatusPenerimaManfaatModal" tabindex="-1"
        aria-labelledby="editStatusPenerimaManfaatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editStatusPenerimaManfaatModalLabel">Edit Status PM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editStatusPenerimaManfaatForm" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="status_pm">Status PM</label>
                            <select name="status_pm" id="edit_status_pm" class="form-control" required>
                                <option value="restru">
                                    Restru</option>
                                <option value="buyback">Buyback
                                </option>
                                <option value="meninggal">
                                    Meninggal</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Status Penerima Manfaat Modal -->
    <div class="modal fade" id="deleteStatusPenerimaManfaatModal" tabindex="-1"
        aria-labelledby="deleteStatusPenerimaManfaatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteStatusPenerimaManfaatModalLabel">Hapus Status PM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteStatusPenerimaManfaatForm" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus status pm ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
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

    <script src="<?php echo e(asset('js/master/status-pm.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\pages\admin\master\list-status-pm.blade.php ENDPATH**/ ?>
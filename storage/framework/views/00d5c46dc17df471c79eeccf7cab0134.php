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
            Hunian
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Tabel Hunian
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Daftar Hunian</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addHunianModal">
                                <i class="bx bx-plus me-1"></i> Tambah Hunian
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
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tower</th>
                                    <th scope="col">Lantai</th>
                                    <th scope="col">No Unit</th>
                                    <th scope="col">Luas Tipe</th>
                                    <th scope="col" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $hunians; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hunian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($hunian->id); ?></td>
                                        <td><?php echo e($hunian->lokasi->lokasi); ?></td>
                                        <td><?php echo e($hunian->tower->tower); ?></td>
                                        <td><?php echo e($hunian->lantai->lantai); ?></td>
                                        <td><?php echo e($hunian->noUnit->no_unit); ?></td>
                                        <td><?php echo e($hunian->LuasTipe->luas_tipe); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Hunian Modal -->
    <div class="modal fade" id="addHunianModal" tabindex="-1" aria-labelledby="addHunianModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addHunianModalLabel">Tambah Hunian Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addHunianForm" action="<?php echo e(route('hunian.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" id="add_lokasi" required
                                placeholder="Masukkan lokasi baru atau pilih dari daftar">
                            <small class="form-text text-muted">Lokasi yang sudah ada:
                                <?php if($lokasis->count() > 0): ?>
                                    <?php $__currentLoopData = $lokasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lokasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge bg-light text-dark me-1"><?php echo e($lokasi->lokasi); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <em>Belum ada data</em>
                                <?php endif; ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_tower" class="form-label">Tower</label>
                            <input type="text" class="form-control" name="tower" id="add_tower" required
                                placeholder="Masukkan tower baru atau pilih dari daftar">
                            <small class="form-text text-muted">Tower yang sudah ada:
                                <?php if($towers->count() > 0): ?>
                                    <?php $__currentLoopData = $towers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tower): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge bg-light text-dark me-1"><?php echo e($tower->tower); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <em>Belum ada data</em>
                                <?php endif; ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_lantai" class="form-label">Lantai</label>
                            <input type="text" class="form-control" name="lantai" id="add_lantai" required
                                placeholder="Masukkan lantai baru atau pilih dari daftar">
                            <small class="form-text text-muted">Lantai yang sudah ada:
                                <?php if($lantais->count() > 0): ?>
                                    <?php $__currentLoopData = $lantais; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lantai): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge bg-light text-dark me-1"><?php echo e($lantai->lantai); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <em>Belum ada data</em>
                                <?php endif; ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_no_unit" class="form-label">No Unit</label>
                            <input type="text" class="form-control" name="no_unit" id="add_no_unit" required
                                placeholder="Masukkan no unit baru atau pilih dari daftar">
                            <small class="form-text text-muted">No Unit yang sudah ada:
                                <?php if($noUnits->count() > 0): ?>
                                    <?php $__currentLoopData = $noUnits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noUnit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge bg-light text-dark me-1"><?php echo e($noUnit->no_unit); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <em>Belum ada data</em>
                                <?php endif; ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_luas_tipe" class="form-label">Luas Tipe</label>
                            <input type="text" class="form-control" name="luas_tipe" id="add_luas_tipe" required
                                placeholder="Masukkan luas tipe baru atau pilih dari daftar">
                            <small class="form-text text-muted">Luas Tipe yang sudah ada:
                                <?php if($luasTipes->count() > 0): ?>
                                    <?php $__currentLoopData = $luasTipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $luasTipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="badge bg-light text-dark me-1"><?php echo e($luasTipe->luas_tipe); ?></span>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <em>Belum ada data</em>
                                <?php endif; ?>
                            </small>
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

    <script src="<?php echo e(asset('js/master/hunian.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\pages\admin\master\list-hunian.blade.php ENDPATH**/ ?>
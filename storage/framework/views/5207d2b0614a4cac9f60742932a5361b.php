

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Profile'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Monitoring
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Kuesioner Monitoring
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <!-- Kiri: Formulir -->
        <div class="col-md-6">
            <div class="card p-4">
                <h5><strong>Tower Samawa Lt. 01 No.02</strong><br><small>Nuansa Pondok Kelapa</small></h5>
                <div class="d-flex justify-content-end mb-2">
                    <a href="#" class="btn btn-sm btn-soft-success">
                        <i class="bx bx-printer font-size-20"></i>
                    </a>
                </div>
                <form>
                    <div class="mb-2">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="Benny Bord" readonly>
                    </div>
                    <div class="mb-2">
                        <label>Email</label>
                        <input type="email" class="form-control" value="benny@gmail.com" readonly>
                    </div>
                    <div class="mb-2">
                        <label>No. HP</label>
                        <input type="text" class="form-control" value="123456878" readonly>
                    </div>
                    <div class="mb-2">
                        <label>Pekerjaan</label>
                        <input type="text" class="form-control" value="Content Creator" readonly>
                    </div>
                    <div class="mb-2">
                        <label>Tanggal Mulai Menghuni</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>Jumlah Penghuni</label>
                        <input type="number" class="form-control" value="3" readonly>
                    </div>
                    <div class="mb-2">
                        <label>Nama dan NIK Penghuni</label>
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <div class="d-flex gap-2 mb-1">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly>
                            </div>
                        <?php endfor; ?>
                    </div>
                    <div class="mb-2">
                        <label>Jumlah Kendaraan</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label>Jenis Kendaraan dan No. Plat</label>
                        <?php for($i = 1; $i <= 6; $i++): ?>
                            <div class="d-flex gap-2 mb-1">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly>
                            </div>
                        <?php endfor; ?>
                    </div>
                </form>
            </div>
        </div>

        <!-- Kanan: Foto dan Meteran -->
        <div class="col-md-6">
            <div class="card p-4">
                <div class="mb-3">
                    <label>Selfie Depan Unit:</label>
                    <div class="border bg-light" style="width:100%; height:280px;"></div>
                </div>
                <div class="mb-3">
                    <label>Nilai Meteran Air:</label>
                    <input type="text" class="form-control mb-1" readonly>
                    <label>Foto Meteran Air:</label>
                    <div class="border bg-light" style="width:100%; height:280px;"></div>
                </div>
                <div class="mb-3">
                    <label>Nilai Meteran Listrik:</label>
                    <input type="text" class="form-control mb-1" readonly>
                    <label>Foto Meteran Listrik:</label>
                    <div class="border bg-light" style="width:100%; height:280px;"></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views/pages/admin/kuesioner-hunian.blade.php ENDPATH**/ ?>
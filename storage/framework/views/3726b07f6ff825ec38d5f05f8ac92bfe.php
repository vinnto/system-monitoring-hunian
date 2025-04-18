

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Horizontal'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- datepicker css -->
    <link href="<?php echo e(URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Hunian
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Monitoring Mandiri
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Monitoring Hunian</h4>
                    <h6 class="mb-4">Periode: Semester 1 Tahun 2025</h6>

                    <form class="monitoring-form" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row mb-4">
                            <label for="nama_penerima" class="col-form-label col-lg-2">Nama Penerima Manfaat</label>
                            <div class="col-lg-10">
                                <input id="nama_penerima" name="nama_penerima" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="nik_penerima" class="col-form-label col-lg-2">NIK Penerima Manfaat</label>
                            <div class="col-lg-10">
                                <input id="nik_penerima" name="nik_penerima" type="number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Upload Foto Diri PM</label>
                            <div class="col-lg-4">
                                <!-- Tombol custom untuk membuka kamera -->
                                <label for="fotoDiriInput" class="btn btn-primary">
                                    📷 Ambil Foto
                                </label>

                                <!-- Input tersembunyi yang akan membuka kamera -->
                                <input type="file" id="fotoDiriInput" name="foto_diri" accept="image/*"
                                    capture="environment" style="display: none;" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Upload Foto Meteran Air</label>
                            <div class="col-lg-4">
                                <input type="file" name="foto_meteran_air" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="nilai_meteran_air" class="col-form-label col-lg-2">Nilai Meteran Air</label>
                            <div class="col-lg-10">
                                <input id="nilai_meteran_air" name="nilai_meteran_air" type="number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Upload Foto Meteran Listrik</label>
                            <div class="col-lg-4">
                                <input type="file" name="foto_meteran_listrik" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="nilai_meteran_listrik" class="col-form-label col-lg-2">Nilai Meteran Listrik</label>
                            <div class="col-lg-10">
                                <input id="nilai_meteran_listrik" name="nilai_meteran_listrik" type="number"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="jumlah_penghuni" class="col-form-label col-lg-2">Jumlah Penghuni</label>
                            <div class="col-lg-4">
                                <select id="jumlah_penghuni" name="jumlah_penghuni" class="form-select">
                                    <option value="" selected disabled>Pilih jumlah</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5+">5+</option>
                                </select>
                            </div>
                        </div>

                        <div class="inner-repeater mb-4">
                            <div data-repeater-list="penghuni" class="inner form-group mb-0 row">
                                <label class="col-form-label col-lg-2">Data Penghuni</label>
                                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                    <div class="mb-3 row align-items-center">
                                        <div class="col-md-4">
                                            <input type="text" name="nama_penghuni" class="form-control"
                                                placeholder="Nama Lengkap Penghuni" />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="nik_penghuni" class="form-control"
                                                placeholder="NIK" />
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="hubungan" class="form-control"
                                                placeholder="Hubungan" />
                                        </div>
                                        <div class="col-md-2">
                                            <div class="d-grid">
                                                <input data-repeater-delete type="button" class="btn btn-success inner"
                                                    value="+" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Foto Penghuni Di Depan Unit</label>
                            <div class="col-lg-4">
                                <input type="file" name="foto_penghuni" class="form-control" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Tanggal Mulai Menghuni</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="tanggal_mulai" id="tanggal_mulai"
                                    data-provide="datepicker" placeholder="Pilih tanggal">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="jumlah_kendaraan" class="col-form-label col-lg-2">Jumlah Kendaraan</label>
                            <div class="col-lg-4">
                                <input id="jumlah_kendaraan" name="jumlah_kendaraan" type="number"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="inner-repeater mb-4">
                            <div data-repeater-list="kendaraan" class="inner form-group mb-0 row">
                                <label class="col-form-label col-lg-2">Data Kendaraan</label>
                                <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                    <div class="mb-3 row align-items-center">
                                        <div class="col-md-5">
                                            <select name="jenis_kendaraan" class="form-select">
                                                <option value="" selected disabled>Jenis Kendaraan</option>
                                                <option value="motor">Motor</option>
                                                <option value="mobil">Mobil</option>
                                            </select>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" name="no_plat" class="form-control"
                                                placeholder="No. Plat Kendaraan" />
                                        </div>
                                        <div class="col-md-2">
                                            <div class="d-grid">
                                                <input data-repeater-delete type="button" class="btn btn-success inner"
                                                    value="+" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label col-lg-2">Catatan</label>
                            <div class="col-lg-10">
                                <textarea id="catatan" name="catatan" class="form-control" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox">
                                    <label class="form-check-label" for="checkbox">
                                        Checkbox
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-4">
                            <div class="col-lg-4">
                                <button type="submit" class="btn btn-success w-100">KIRIM</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <!-- bootstrap datepicker -->
    <script src="<?php echo e(URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')); ?>"></script>

    <!-- form repeater js -->
    <script src="<?php echo e(URL::asset('build/libs/jquery.repeater/jquery.repeater.min.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('.inner-repeater').repeater({
                initEmpty: false,
                show: function() {
                    $(this).slideDown();
                },
                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });

            $('#tanggal_mulai').datepicker({
                format: 'dd/mm/yyyy',
                autoclose: true,
                todayHighlight: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views/pages/user/monitoring-mandiri.blade.php ENDPATH**/ ?>
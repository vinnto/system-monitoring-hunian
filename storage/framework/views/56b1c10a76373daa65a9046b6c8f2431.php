<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Profile'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Monitoring Hunian
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Detail Hunian
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <!-- Profil dan Data Penghuni -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Profil -->
                        <div class="col-md-4">
                            <div class="card overflow-hidden">
                                <div class="bg-light">
                                    <div class="text-center p-4">
                                        <h4 class="font-weight-bold">UNIT SAMAWA 01-02</h4>
                                        <h5>Nuansa Pondok Kelapa</h5>
                                        <div class="mb-3">
                                            <div
                                                style="width: 290px; height: 290px; border-radius: 50%; background-color: #eaeaea; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                                                <img src="<?php echo e(asset('images/avatar-1.jpg')); ?>" alt="Image Description"
                                                    style="width: 290px; height: 290px; border-radius: 50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Penghuni -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-5">Data Penghuni Saat ini</h4>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap mb-0">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Full Name :</th>
                                                    <td>Benny Brood</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">E-mail :</th>
                                                    <td>potret@gmail.com</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">No. HP :</th>
                                                    <td>123456789</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Pekerjaan:</th>
                                                    <td>Content Creator</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Alamat Pekerjaan:</th>
                                                    <td>Jakarta Pusat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Status Ketaatan:</th>
                                                    <td><span class="badge bg-warning">Terindikasi</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Keterangan:</th>
                                                    <td><span class="badge bg-danger">Meteran Air Berkurang</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Riwayat Monitoring -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Riwayat Monitoring Penghuni Saat ini</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Periode Monitoring</th>
                                    <th scope="col">Nama Penghuni</th>
                                    <th scope="col">Jenis Monitoring</th>
                                    <th scope="col">Tanggal Monitoring</th>
                                    <th scope="col">Status Ketaatan</th>
                                    <th scope="col">Lihat Kuesioner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ganjil - 2025</td>
                                    <td>Benny Brood</td>
                                    <td>Surveyor</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-success">Taat</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Genap - 2025</td>
                                    <td>Benny Brood</td>
                                    <td>Mandiri</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-warning">Terindikasi</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ganjil - 2026</td>
                                    <td>Benny Brood</td>
                                    <td>Belum</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-danger">Tidak Taat</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Histori Penghunian -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Histori Penghunian</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Penghuni</th>
                                    <th scope="col">Tanggal Akad</th>
                                    <th scope="col">Tanggal Berhenti Menghuni</th>
                                    <th scope="col">Status PM</th>
                                    <th scope="col">Lihat Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Benny Brood</td>
                                    <td>20 Oct, 2019</td>
                                    <td>20 Oct, 2020</td>
                                    <td><span class="badge bg-success">Pemilik</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Benny Brood</td>
                                    <td>20 Oct, 2019</td>
                                    <td>20 Oct, 2020</td>
                                    <td><span class="badge bg-warning">Penyewa</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Benny Brood</td>
                                    <td>20 Oct, 2019</td>
                                    <td>20 Oct, 2020</td>
                                    <td><span class="badge bg-danger">Meninggal</span></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.kuesioner.mandiri')); ?>"
                                            class="btn btn-sm btn-soft-success me-2" title="Kuesionser Hunian"><i
                                                class="mdi mdi-eye-outline font-size-20"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>

    <!-- profile init -->
    <script src="<?php echo e(URL::asset('build/js/pages/profile.init.js')); ?>"></script>

    <script>
        $('#update-profile').on('submit', function(event) {
            event.preventDefault();
            var Id = $('#data_id').val();
            let formData = new FormData(this);
            $('#emailError').text('');
            $('#nameError').text('');
            $('#dobError').text('');
            $('#avatarError').text('');
            $.ajax({
                url: "<?php echo e(url('update-profile')); ?>" + "/" + Id,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#emailError').text('');
                    $('#nameError').text('');
                    $('#dobError').text('');
                    $('#avatarError').text('');
                    if (response.isSuccess == false) {
                        alert(response.Message);
                    } else if (response.isSuccess == true) {
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    }
                },
                error: function(response) {
                    $('#emailError').text(response.responseJSON.errors.email);
                    $('#nameError').text(response.responseJSON.errors.name);
                    $('#dobError').text(response.responseJSON.errors.dob);
                    $('#avatarError').text(response.responseJSON.errors.avatar);
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\system-monitoring-hunian\resources\views\pages\admin\detail-hunian.blade.php ENDPATH**/ ?>
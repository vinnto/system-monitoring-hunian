

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.Profile'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Contacts
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Profile
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
                                <div class="bg-primary-subtle">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-primary p-3">
                                                <h6 class="text-primary">Tower Samawa Lt. 01 No. 02</h6>
                                                <p>Nuansa Pondok Kelapa</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="<?php echo e(URL::asset('build/images/profile-img.png')); ?>" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="avatar-md profile-user-wid mb-5">
                                                <img src="<?php echo e(isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('build/images/users/avatar-1.jpg')); ?>"
                                                    alt="" class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-15 text-truncate">Benny Brood</h5>
                                            <p class="text-muted mb-0 text-truncate">Penerima Manfaat</p>
                                        </div>

                                        <div class="col-sm-7">
                                            <div class="pt-4">
                                                <div class="mt-4">
                                                    <a href=""
                                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                                        data-bs-toggle="modal" data-bs-target=".update-profile">Edit
                                                        Profile</a>
                                                </div>
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
                                                    <th scope="row">Status Ketaatan</th>
                                                    <td>Terindikasi</td>
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
                    <h4 class="card-title mb-4">Riwayat Monitoring</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Periode Monitoring</th>
                                    <th scope="col">Status Monitoring</th>
                                    <th scope="col">Tanggal Monitoring</th>
                                    <th scope="col">Status Ketaatan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Semester 1 - 2025</td>
                                    <td>Belum</td>
                                    <td>20 Oct, 2019</td>
                                    <td>Terindikasi</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Semester 2 - 2024</td>
                                    <td>Sudah</td>
                                    <td>20 Oct, 2019</td>
                                    <td>Tidak Taat</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Semester 1 - 2024</td>
                                    <td>Sudah</td>
                                    <td>20 Oct, 2019</td>
                                    <td>Taat</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline"></i></a>
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

    <!--  Update Profile example -->
    <div class="modal fade update-profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" id="update-profile">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e(Auth::user()->id); ?>" id="data_id">
                        <div class="mb-3">
                            <label for="useremail" class="form-label">Email</label>
                            <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="useremail" value="<?php echo e(Auth::user()->email); ?>" name="email"
                                placeholder="Enter email" autofocus>
                            <div class="text-danger" id="emailError" data-ajax-feedback="email"></div>
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(Auth::user()->name); ?>" id="username" name="name" autofocus
                                placeholder="Enter username">
                            <div class="text-danger" id="nameError" data-ajax-feedback="name"></div>
                        </div>

                        <div class="mb-3">
                            <label for="userdob">Date of Birth</label>
                            <div class="input-group" id="datepicker1">
                                <input type="text" class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy"
                                    data-date-container='#datepicker1' data-date-end-date="0d"
                                    value="<?php echo e(date('d-m-Y', strtotime(Auth::user()->dob))); ?>" data-provide="datepicker"
                                    name="dob" autofocus id="dob">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                            <div class="text-danger" id="dobError" data-ajax-feedback="dob"></div>
                        </div>

                        <div class="mb-3">
                            <label for="avatar">Profile Picture</label>
                            <div class="input-group">
                                <input type="file" class="form-control <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="avatar" name="avatar" autofocus>
                                <label class="input-group-text" for="avatar">Upload</label>
                            </div>
                            <div class="text-start mt-2">
                                <img src="<?php echo e(asset(Auth::user()->avatar)); ?>" alt=""
                                    class="rounded-circle avatar-lg">
                            </div>
                            <div class="text-danger" role="alert" id="avatarError" data-ajax-feedback="avatar"></div>
                        </div>

                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light UpdateProfile"
                                data-id="<?php echo e(Auth::user()->id); ?>" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\system-monitoring-hunian\resources\views\contacts-profile.blade.php ENDPATH**/ ?>
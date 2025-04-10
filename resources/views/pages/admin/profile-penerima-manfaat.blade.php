@extends('layouts.master')

@section('title')
    @lang('translation.Profile')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Contacts
        @endslot
        @slot('title')
            Profile
        @endslot
    @endcomponent

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
                                        <div class="col-end-10">
                                            <div class="text-primary p-3">
                                                <h6 class="text-primary">Tower Samawa Lt. 01 No. 02</h6>
                                                <p>Nuansa Pondok Kelapa</p>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src="{{ URL::asset('build/images/profile-img.png') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="avatar-md profile-user-wid mb-5">
                                                <img src="{{ isset(Auth::user()->avatar) ? asset(Auth::user()->avatar) : asset('build/images/users/avatar-1.jpg') }}"
                                                    alt="" class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-15 text-truncate">Benny Brood</h5>
                                            <span class="badge bg-success">PM Aktif</span>
                                        </div>

                                        {{-- edit status pm --}}
                                        <div class="col-sm-7">
                                            <div class="pt-4">
                                                <div class="mt-4">
                                                    <a href="#"
                                                        class="btn btn-primary waves-effect waves-light btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#editStatusPM">Edit
                                                        Status PM</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile Penerima Manfaat -->
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Profile Penerima Manfaat</h4>
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Name</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Benny Brood">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4 d-flex align-items-center">
                                                <label for="avatar" class="col-md-2 col-form-label">Foto KTP</label>
                                                <div class="col-md-10">
                                                    <div class="text-start mt-2">
                                                        <img src="#" alt="" class="rounded-b-full avatar-lg">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">No NIK</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="12334356765">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 d-flex align-items-center">
                                                <label for="avatar" class="col-md-2 col-form-label">Foto KK</label>
                                                <div class="col-md-10">
                                                    <div class="text-start mt-2">
                                                        <img src="#" alt="" class="rounded-b-full avatar-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">No KK</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="123456789">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="benny12@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">No. HP</label>
                                                <div class="col-md-10">
                                                    <input type="number" class="form-control" value="0812345678">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Pekerjaan</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Content Creator">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Alamat
                                                    Pekerjaan</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Jakarta Pusat">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Lokasi
                                                    Unit</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control"
                                                        value="Nuansa Pondok Kelapa">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Tower</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="Samawa">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Lantai</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="02">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">No. Unit</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="01">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Tipe
                                                    Unit</label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" value="28">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="billing-name" class="col-md-2 col-form-label">Tanggal
                                                    Akad</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" value="22/03/2025">
                                                </div>
                                            </div>
                                        </tbody>
                                    </table>
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
                                    <th scope="col">Lihat Kuesioner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Semester 1 - 2025</td>
                                    <td>Belum</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-warning">Terindikasi</span></td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#lihatKuesioner"
                                            class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline font-size-15"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Semester 2 - 2024</td>
                                    <td>Sudah</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-danger">Tidak Taat</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline font-size-15"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Semester 1 - 2024</td>
                                    <td>Sudah</td>
                                    <td>20 Oct, 2019</td>
                                    <td><span class="badge bg-success">Taat</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i
                                                class="mdi mdi-eye-outline font-size-15"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Riwayat Klarifikasi -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Riwayat Klarifikasi</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Periode Monitoring</th>
                                    <th scope="col">Jadwal Klarifikasi</th>
                                    <th scope="col">Status Klarifikasi</th>
                                    <th scope="col">Tanggal Kehadiran</th>
                                    <th scope="col">Lihat Hasil Klarifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Semester 1 - 2025</td>
                                    <td>Senin, 07 Oktober 2025</td>
                                    <td>Teguran 1</td>
                                    <td>Rabu, 09 Oktober 2025</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#lihatHasilKlarifikasi"
                                            class="btn btn-sm btn-soft-primary "><i
                                                class="mdi mdi-eye-outline font-size-15"></i></a>
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

    <!-- Edit status PM -->
    <div class="modal fade" id="editStatusPM" tabindex="-1" aria-labelledby="editStatusPMLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-start mb-3" style="font-size: 20px;">
                                <i class="bx bx-user"> Benny Brood</i>
                            </h5>
                            <h5 class="text-start" style="font-size: 15px;">
                                Tower Samawa Lt. 01 No. 02
                            </h5>
                            <h5 class="text-start" style="font-size: 15px;">
                                Nuansa Pondok Kelapa
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Status Penerima Manfaat</label>
                                    <select class="form-select" required>
                                        <option value="">Pilih status PM</option>
                                        <option value="">Aktif</option>
                                        <option value="">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addNewOrder-btn" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end Edit status PM -->

    <!-- Lihat Kuesioner -->
    <div class="modal fade" id="lihatKuesioner" tabindex="-1" aria-labelledby="lihatKuesionerLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-start" style="font-size: 20px;">
                                Tower Samawa Lt. 01 No. 02
                            </h5>
                            <h5 class="text-start" style="font-size: 20px;">
                                Nuansa Pondok Kelapa
                            </h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="example-date-input" class="col-form-label">Tanggal
                                        Kehadiran</label>
                                    <input class="form-control" type="date" value="2019-08-19"
                                        id="example-date-input">
                                </div>
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Intensitas Menghuni</label>
                                    <input type="text" class="form-control" placeholder="Aktif">
                                </div>
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Keterangan(Jika Menghuni
                                        Berkala)</label>
                                    <input type="text" class="form-control" placeholder="Pindah Lokasi Kerja">
                                </div>
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Tempat Tinggal Saat ini(Jika Menghuni
                                        Berkala)</label>
                                    <input type="text" class="form-control" placeholder="Kontrak/Sewa">
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-7">
                                        <div class="mt-4 mt-md-0">
                                            <label for="upload">Upload Berita Pernyataan (pdf)</label>
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-7">
                                        <div class="mt-4 mt-md-0">
                                            <label for="upload">Upload Berita Acara (pdf)</label>
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addNewOrder-btn" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end Lihat Kuesioner -->

    <!-- Lihat Hasil Klarfikasi -->
    <div class="modal fade" id="lihatHasilKlarifikasi" tabindex="-1" aria-labelledby="lihatHasilKlarifikasiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center mb-4">
                                            <h4 class="card-title">Hasil Kuesioner Monitoring</h4>
                                            <h5>Menara Samawa Nuansa Pondok Kelapa</h5>
                                        </div>

                                        <div class="mb-4">
                                            <h6 class="fw-bold">DATA HUNIAN</h6>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Nomor Unit</label>
                                                    <input type="number" class="form-control" value="36">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Tower</label>
                                                    <input type="text" class="form-control"
                                                        value="Nuansa Pondok Kelapa">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Nama Penerima Manfaat</label>
                                                    <input type="text" class="form-control" value="Benny Brood">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" value="benny12@gmail.com">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">No. HP</label>
                                                    <input type="text" class="form-control" value="0812345678">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Pekerjaan</label>
                                                    <input type="text" class="form-control" value="Content Creator">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <h6 class="fw-bold">KUESIONER MONITORING</h6>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Tanggal Mulai Menghuni</label>
                                                    <input type="text" class="form-control" value="20/03/2025">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <label class="form-label">Jumlah Penghuni</label>
                                                    <input type="number" class="form-control" value="2">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama dan NIK Penghuni</label>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">1.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">2.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">3.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <div class="row mb-3">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Jumlah Kendaraan</label>
                                                        <input type="number" class="form-control" value="2">
                                                    </div>
                                                </div>
                                                <label class="form-label">Jenis Kendaraan dan No. Plat Kendaraan</label>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">1.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">2.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-1 text-end">
                                                        <label class="form-label">3.</label>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                    <div class="col-5">
                                                        <input type="text" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered text-center">
                                                        <tr>
                                                            <th class="text-center">Selfie Depan Unit</th>
                                                            <th class="text-center">Foto Meteran Air</th>
                                                            <th class="text-center">Foto Meteran Listrik</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 33%;">
                                                                <div class="bg-light mx-auto"
                                                                    style="height: 150px; width: 100px;"></div>
                                                            </td>
                                                            <td style="width: 33%;">
                                                                <div class="bg-light mx-auto"
                                                                    style="height: 150px; width: 100px;"></div>
                                                                <div class="mt-2">Nilai Air : ___</div>
                                                            </td>
                                                            <td style="width: 33%;">
                                                                <div class="bg-light mx-auto"
                                                                    style="height: 150px; width: 100px;"></div>
                                                                <div class="mt-2">Nilai Listrik : ___</div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>

                                                <div class="table-responsive mt-3">
                                                    <table class="table table-bordered text-center">
                                                        <tr>
                                                            <th class="text-center">Foto KTP</th>
                                                            <th class="text-center">Foto Kartu Keluarga</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 50%;">
                                                                <div class="bg-light mx-auto"
                                                                    style="height: 150px; width: 200px;"></div>
                                                            </td>
                                                            <td style="width: 50%;">
                                                                <div class="bg-light mx-auto"
                                                                    style="height: 150px; width: 200px;"></div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" id="addNewOrder-btn" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end modal body -->
            </div>
            <!-- end modal-content -->
        </div>
        <!-- end modal-dialog -->
    </div>
    <!-- end Lihat Hasil Klarfikasi -->
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- profile init -->
    <script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>

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
                url: "{{ url('update-profile') }}" + "/" + Id,
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
@endsection

@extends('layouts.master')

@section('title')
    @lang('translation.Job_List')
@endsection
@section('css')
    <!-- bootstrap-datepicker css -->
    <link href="{{ URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Table Klarifikasi
        @endslot
        @slot('title')
            Klarifikasi
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Table Klarifikasi</h5>
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
                                    <th scope="col">Jadwal Klarifikasi</th>
                                    <th scope="col">Status Klarifikasi</th>
                                    <th scope="col">Tanggal Kehadiran</th>
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
                                    <td>Jumat, 10 Maret 2025</td>
                                    <td>Teguran 1</td>
                                    <td>Senin, 17 Maret 2025</td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-2">
                                            <a href="#" data-bs-toggle="modal"
                                                data-bs-target="#uploadHasilKlarifikasia"
                                                class="btn btn-sm btn-soft-warning me-2" title="Input hasil klarifikasi"><i
                                                    class="bx bx-edit-alt font-size-20"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#jadwalKlarifikasi"
                                                class="btn btn-sm btn-soft-primary me-2" title="Input Jadwal Klarfikasi"><i
                                                    class="bx bx-calendar-event font-size-20"></i></a>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#statusKetaatan"
                                                class="btn btn-sm btn-soft-success" title="Edit Status Ketaatan"><i
                                                    class="bx bx-home-circle font-size-20"></i></a>
                                        </div>
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


    <!-- Upload Hasil Klarifikasi -->
    <div class="modal fade" id="uploadHasilKlarifikasia" tabindex="-1" aria-labelledby="uploadHasilKlarifikasiaLabel"
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
                                    <select class="form-select" id="paystatus-input" required>
                                        <option value="Paid" selected>Aktif</option>
                                        <option value="Refund">Berkala</option>
                                        <option value="Refund">Pelanggaran</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Keterangan (Jika Menghuni
                                        Berkala)</label>
                                    <select class="form-select" id="paystatus-input" required
                                        onchange="toggleOtherInput(this)">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="Pindah Lokasi Kerja">Pindah Lokasi Kerja</option>
                                        <option value="Dinas/Pendidikan Luar Kota/Negeri">Dinas/Pendidikan Luar Kota/Negeri
                                        </option>
                                        <option value="Peningkatan Ekonomi">Peningkatan Ekonomi</option>
                                        <option value="Peningkatan Jumlah Anggota Keluarga">Peningkatan Jumlah Anggota
                                            Keluarga</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="mb-3 d-none" id="other-keterangan">
                                    <label for="keterangan-lainnya" class="form-label">Tuliskan Keterangan Lainnya</label>
                                    <textarea class="form-control" id="keterangan-lainnya" rows="3" placeholder="Masukkan keterangan lainnya..."></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Tempat Tinggal Saat ini(Jika Menghuni
                                        Berkala)</label>
                                    <select class="form-select" id="paystatus-input" required>
                                        <option value="Chargeback">Pilih Tinggal Saat ini</option>
                                        <option value="Paid" selected>Kontrak/Sewa</option>
                                        <option value="Refund">Rumah Keluarga</option>
                                        <option value="Refund">Rumah Milik</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-7">
                                        <div class="mt-4 mt-md-0">
                                            <label for="upload">Upload Surat Pernyataan (pdf)</label>
                                            <input class="form-control" type="file">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-7">
                                        <div class="mt-4 mt-md-0">
                                            <label for="upload">Upload Surat Berita Acara (pdf)</label>
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
    <!-- end Upload Hasil Klarifikasi -->

    <!-- Jadwal Klarifikasi -->
    <div class="modal fade" id="jadwalKlarifikasi" tabindex="-1" aria-labelledby="jadwalKlarifikasiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-start" style="font-size: 15px;">
                                Tower Samawa Lt. 01 No. 02
                            </h3>
                            <h3 class="text-start" style="font-size: 15px;">
                                Nuansa Pondok Kelapa
                            </h3>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="example-date-input" class="col-form-label">Jadwal Klarifikasi</label>
                                    <input class="form-control" type="date" value="2019-08-19"
                                        id="example-date-input">
                                </div>
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Jenis Klarifikasi</label>
                                    <select class="form-select" id="paystatus-input" required>
                                        <option value="Chargeback">Jenis Klarifikasi</option>
                                        <option value="Refund" selected>Klarifikasi</option>
                                        <option value="Paid">Teguran 1</option>
                                        <option value="Refund">Teguran 2</option>
                                        <option value="Refund">Peringatan 1</option>
                                        <option value="Refund">Peringatan 2</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a payment status.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="col-md-7">
                                        <div class="mt-4 mt-md-0">
                                            <label for="upload">Upload Surat (pdf)</label>
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
    <!-- end Jadwal Klarifikasi -->

    <!-- Status Ketaatan -->
    <div class="modal fade" id="statusKetaatan" tabindex="-1" aria-labelledby="statusKetaatanLabel"
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
                    {{-- <h5 class="modal-title" id="newOrderModalLabel">Add New Order</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" class="needs-validation createorder-form" id="createorder-form" novalidate>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="paystatus-input" class="form-label">Status Ketaatan</label>
                                    <select class="form-select" id="paystatus-input" required>
                                        <option value="Chargeback">Status Ketaatan</option>
                                        <option value="Paid" selected>Terindikasi</option>
                                        <option value="Refund">Taat</option>
                                        <option value="Refund">Tidak Taat</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a payment status.</div>
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
    <!-- end Status Ketaatan -->

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
@endsection
@section('script')
    <!-- bootstrap-datepicker js -->
    <script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- job-list init -->
    <script src="{{ URL::asset('build/js/pages/job-list.init.js') }}"></script>

    <script>
        function toggleOtherInput(select) {
            const otherInput = document.getElementById('other-keterangan');
            if (select.value === 'Lainnya') {
                otherInput.classList.remove('d-none');
            } else {
                otherInput.classList.add('d-none');
            }
        }
    </script>
@endsection

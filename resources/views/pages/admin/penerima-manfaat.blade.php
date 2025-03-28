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
            User
        @endslot
        @slot('title')
            Penerima Manfaat
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Penerima Manfaat</h5>
                        <div class="col-xxl-2 col-lg-4">
                            <button type="button" class="btn btn-soft-secondary w-100" onclick="filterData();"><i
                                    class="mdi mdi-filter-outline align-middle"></i> Filter</button>
                        </div>
                    </div>
                </div>
                <div class="card-body border-bottom">
                    <div class="row g-3">
                        <div class="col-xxl-4 col-lg-6">
                            <input type="search" class="form-control" id="searchTableList" placeholder="Search for ...">
                        </div>
                        <div class="col-xxl-2 col-lg-4">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Semua Lokasi</option>
                                <option value="Full Time">Samawa Nuansa Pondok Kelapa</option>
                                <option value="Part Time">Swasana Nuansa Pondok</option>
                                <option value="Part Time">Kanaya Nuansa Cilangkap</option>
                                <option value="Part Time">Bunaken Sentraland Cenkareng</option>
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
                                    <th scope="col">Name PM</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tower</th>
                                    <th scope="col">Lantai</th>
                                    <th scope="col">No. Unit</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Budi Harto</td>
                                    <td>Nuansa Pondok Kelapa</td>
                                    <td>Samawa</td>
                                    <td>01</td>
                                    <td>02</td>
                                    <td><span class="badge bg-success">true</span></td>
                                    <td>
                                        <a href="{{ route('admin.profile.penerima.manfaat') }}"
                                            class="btn btn-sm btn-soft-primary"><i class="bx bx-user font-size-20"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jihan Yelmi</td>
                                    <td>Nuansa Pondok Kelapa</td>
                                    <td>Samawa</td>
                                    <td>01</td>
                                    <td>02</td>
                                    <td><span class="badge bg-danger">false</span></td>
                                    <td>
                                        <a href="{{ route('admin.profile.penerima.manfaat') }}"
                                            class="btn btn-sm btn-soft-primary"><i class="bx bx-user font-size-20"></i></a>
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
@endsection

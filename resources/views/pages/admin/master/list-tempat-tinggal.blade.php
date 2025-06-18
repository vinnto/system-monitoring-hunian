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
            Tempat Tinggal
        @endslot
        @slot('title')
            Tabel Tempat Tinggal
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Daftar Tempat Tinggal</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTempatTinggalModal">
                                <i class="bx bx-plus me-1"></i> Tambah Tempat Tinggal
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table align-middle dt-responsive nowrap w-100 table-check">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Tempat Tinggal</th>
                                    <th scope="col" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tempat_tinggals as $tempat_tinggal)
                                    <tr>
                                        <td>{{ $tempat_tinggal->id }}</td>
                                        <td>{{ $tempat_tinggal->tempat_tinggal }}</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button class="btn btn-sm btn-soft-success edit-btn" data-bs-toggle="modal"
                                                    data-bs-target="#editTempatTinggalModal"data-id="{{ $tempat_tinggal->id }}"
                                                    data-tempat_tinggal="{{ $tempat_tinggal->tempat_tinggal }}"
                                                    data-url="{{ route('tempat-tinggal.update', $tempat_tinggal->id) }}">
                                                    <i class="bx bx-edit font-size-20"></i>
                                                </button>
                                                <button class="btn btn-sm btn-soft-danger delete-btn" data-bs-toggle="modal"
                                                    data-bs-target="#deleteTempatTinggalModal" data-id="{{ $tempat_tinggal->id }}"
                                                    data-url="{{ route('tempat-tinggal.destroy', $tempat_tinggal->id) }}">
                                                    <i class="bx bx-trash font-size-20"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Tempat Tinggal Modal -->
    <div class="modal fade" id="addTempatTinggalModal" tabindex="-1" aria-labelledby="addTempatTinggalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTempatTinggalModalLabel">Tambah Tempat Tinggal Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addTempatTinggalForm" action="{{ route('tempat-tinggal.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tempat_tinggal" class="form-label">Tempat Tinggal</label>
                            <input type="text" class="form-control" name="tempat_tinggal" required>
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

    <!-- Edit Tempat Tinggal Modal -->
    <div class="modal fade" id="editTempatTinggalModal" tabindex="-1" aria-labelledby="editTempatTinggalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTempatTinggalModalLabel">Edit Tempat Tinggal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editTempatTinggalForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit_tempat_tinggal" class="form-label">Tempat Tinggal</label>
                            <input type="text" class="form-control" id="edit_tempat_tinggal" name="tempat_tinggal"
                                required>
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

    <!-- Delete Tempat Tinggal Modal -->
    <div class="modal fade" id="deleteTempatTinggalModal" tabindex="-1" aria-labelledby="deleteTempatTinggalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteTempatTinggalModalLabel">Hapus Tempat Tinggal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteTempatTinggalForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus tempat tinggal ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
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

    <script src="{{ asset('js/master/tempat-tinggal.js') }}"></script>
@endsection

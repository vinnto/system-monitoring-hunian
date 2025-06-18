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
            Periode
        @endslot
        @slot('title')
            Tabel Periode
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body border-bottom">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0 card-title flex-grow-1">Daftar Periode</h5>
                        <div class="flex-shrink-0">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPeriodeModal">
                                <i class="bx bx-plus me-1"></i> Tambah Periode
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
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">Tanggal Awal</th>
                                    <th scope="col">Tanggal Akhir</th>
                                    <th scope="col" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($periodes as $periode)
                                    <tr>
                                        <td>{{ $periode->id }}</td>
                                        <td>{{ $periode->tahun }}</td>
                                        <td>{{ $periode->semester }}</td>
                                        <td>{{ $periode->tgl_awal }}</td>
                                        <td>{{ $periode->tgl_akhir }}</td>
                                        <td>
                                            <div class="d-flex flex-wrap gap-2">
                                                <button class="btn btn-sm btn-soft-success edit-btn" data-bs-toggle="modal"
                                                    data-bs-target="#editPeriodeModal" data-id="{{ $periode->id }}"
                                                    data-url="{{ route('periode.update', $periode->id) }}">
                                                    <i class="bx bx-edit font-size-20"></i>
                                                </button>
                                                <button class="btn btn-sm btn-soft-danger delete-btn" data-bs-toggle="modal"
                                                    data-bs-target="#deletePeriodeModal" data-id="{{ $periode->id }}"
                                                    data-url="{{ route('no-unit.destroy', $periode->id) }}">
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

    <!-- Add Periode Modal -->
    <div class="modal fade" id="addPeriodeModal" tabindex="-1" aria-labelledby="addPeriodeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPeriodeModalLabel">Tambah Periode Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addPeriodeForm" action="{{ route('periode.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tahun">Tahun</label>
                            <div class="position-relative" id="yearAdd">
                                <input type="text" name="tahun" class="form-control" data-date-container='#yearAdd'
                                    placeholder="Pilih Tahun" value="{{ old('tahun') }}" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="semester">Semester</label>
                            <select name="semester" class="form-control" required>
                                <option value="">Pilih Semester</option>
                                <option value="ganjil">Semester Ganjil</option>
                                <option value="genap">Semester Genap</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Awal</label>
                            <input type="date" class="form-control" name="tgl_awal" value="{{ old('tgl_awal') }}"
                                required />
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Akhir</label>
                            <input type="date" class="form-control" name="tgl_akhir" value="{{ old('tgl_akhir') }}"
                                required />
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

    <!-- Edit Periode Modal -->
    <div class="modal fade" id="editPeriodeModal" tabindex="-1" aria-labelledby="editPeriodeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPeriodeModalLabel">Edit Periode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editPeriodeForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="tahun">Tahun</label>
                            <div class="position-relative" id="yearEdit">
                                <input type="text" name="tahun" class="form-control"
                                    data-date-container='#yearEdit' value="{{ $periode->tahun }}" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="semester">Semester</label>
                            <select name="semester" class="form-control" required>
                                <option value="ganjil" {{ $periode->semester == 'ganjil' ? 'selected' : '' }}>Semester
                                    Ganjil</option>
                                <option value="genap" {{ $periode->semester == 'genap' ? 'selected' : '' }}>Semester
                                    Genap</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Tanggal Awal</label>
                            <input type="date" class="form-control" name="tgl_awal" value="{{ $periode->tgl_awal }}"
                                required />
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Akhir</label>
                            <input type="date" class="form-control" name="tgl_akhir"
                                value="{{ $periode->tgl_awal }}" required />
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

    <!-- Delete Periode Modal -->
    <div class="modal fade" id="deletePeriodeModal" tabindex="-1" aria-labelledby="deletePeriodeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deletePeriodeModalLabel">Hapus Periode</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deletePeriodeForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus periode ini?</p>
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

    <script src="{{ asset('js/master/periode.js') }}"></script>
@endsection

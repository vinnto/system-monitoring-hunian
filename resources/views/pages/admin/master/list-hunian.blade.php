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
            Hunian
        @endslot
        @slot('title')
            Tabel Hunian
        @endslot
    @endcomponent

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
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Tower</th>
                                    <th scope="col">Lantai</th>
                                    <th scope="col">No Unit</th>
                                    <th scope="col">Luas Tipe</th>
                                    <th scope="col" style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hunians as $hunian)
                                    <tr>
                                        <td>{{ $hunian->id }}</td>
                                        <td>{{ $hunian->lokasi->lokasi }}</td>
                                        <td>{{ $hunian->tower->tower }}</td>
                                        <td>{{ $hunian->lantai->lantai }}</td>
                                        <td>{{ $hunian->noUnit->no_unit }}</td>
                                        <td>{{ $hunian->LuasTipe->luas_tipe }}</td>
                                    </tr>
                                @endforeach
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
                <form id="addHunianForm" action="{{ route('hunian.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="add_lokasi" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" id="add_lokasi" required
                                placeholder="Masukkan lokasi baru atau pilih dari daftar">
                            <small class="form-text text-muted">Lokasi yang sudah ada:
                                @if ($lokasis->count() > 0)
                                    @foreach ($lokasis as $lokasi)
                                        <span class="badge bg-light text-dark me-1">{{ $lokasi->lokasi }}</span>
                                    @endforeach
                                @else
                                    <em>Belum ada data</em>
                                @endif
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_tower" class="form-label">Tower</label>
                            <input type="text" class="form-control" name="tower" id="add_tower" required
                                placeholder="Masukkan tower baru atau pilih dari daftar">
                            <small class="form-text text-muted">Tower yang sudah ada:
                                @if ($towers->count() > 0)
                                    @foreach ($towers as $tower)
                                        <span class="badge bg-light text-dark me-1">{{ $tower->tower }}</span>
                                    @endforeach
                                @else
                                    <em>Belum ada data</em>
                                @endif
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_lantai" class="form-label">Lantai</label>
                            <input type="text" class="form-control" name="lantai" id="add_lantai" required
                                placeholder="Masukkan lantai baru atau pilih dari daftar">
                            <small class="form-text text-muted">Lantai yang sudah ada:
                                @if ($lantais->count() > 0)
                                    @foreach ($lantais as $lantai)
                                        <span class="badge bg-light text-dark me-1">{{ $lantai->lantai }}</span>
                                    @endforeach
                                @else
                                    <em>Belum ada data</em>
                                @endif
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_no_unit" class="form-label">No Unit</label>
                            <input type="text" class="form-control" name="no_unit" id="add_no_unit" required
                                placeholder="Masukkan no unit baru atau pilih dari daftar">
                            <small class="form-text text-muted">No Unit yang sudah ada:
                                @if ($noUnits->count() > 0)
                                    @foreach ($noUnits as $noUnit)
                                        <span class="badge bg-light text-dark me-1">{{ $noUnit->no_unit }}</span>
                                    @endforeach
                                @else
                                    <em>Belum ada data</em>
                                @endif
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="add_luas_tipe" class="form-label">Luas Tipe</label>
                            <input type="text" class="form-control" name="luas_tipe" id="add_luas_tipe" required
                                placeholder="Masukkan luas tipe baru atau pilih dari daftar">
                            <small class="form-text text-muted">Luas Tipe yang sudah ada:
                                @if ($luasTipes->count() > 0)
                                    @foreach ($luasTipes as $luasTipe)
                                        <span class="badge bg-light text-dark me-1">{{ $luasTipe->luas_tipe }}</span>
                                    @endforeach
                                @else
                                    <em>Belum ada data</em>
                                @endif
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

    <script src="{{ asset('js/master/hunian.js') }}"></script>
@endsection

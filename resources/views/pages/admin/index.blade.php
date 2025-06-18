@extends('layouts.master')

@section('title')
    {{-- @lang('translation.Dashboards') --}}
@endsection

@section('css')
    <!-- tui charts css -->
    <link href="{{ URL::asset('build/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- style dashboard --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard/admin-dashboard.css') }}">
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Home
        @endslot
        @slot('title')
            Dashboard
        @endslot
    @endcomponent

    {{--  Dashboard Page  --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3 align-items-center">
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the tower</option>
                                <option value="Full Time">Samawa</option>
                                <option value="Part Time">Swasana</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the year</option>
                                <option value="Full Time">2025</option>
                                <option value="Part Time">2026</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Choose the semester</option>
                                <option value="Full Time">Semester 1</option>
                                <option value="Part Time">Semester 2</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-3 text-end">
                            <button type="button" class="btn btn-soft-primary w-100 w-md-auto" onclick="filterData();">
                                <span class="d-none d-md-inline">Filter</span> <i
                                    class="mdi mdi-filter-outline align-middle"></i>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex overflow-auto pb-3"
                        style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;">
                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Total Penerima Manfaat</p>
                                        <h4 class="mb-0">0000</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-user font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Samawa Nuansa Pondok Kelapa</p>
                                        <h4 class="mb-0">0000</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-buildings font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Swasana Nuansa Pondok</p>
                                        <h4 class="mb-0">0000</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-buildings font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm"
                            style="border-radius: 15px; overflow: hidden; background-color: #e6f4f1; min-width: 300px;">
                            <div class="position-relative">
                                <img src="{{ asset('images/gedung-kanaya.png') }}" alt="Gedung" class="w-100"
                                    style="height: 180px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 p-3">
                                    <h4 class="fw-bold mb-0" style="color: #2c3e50;">Kanaya</h4>
                                    <small class="text-muted">Nuansa Cilangkap</small>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <h1 class="fw-bold"
                                        style="font-size: 60px; color: black; -webkit-text-stroke: 1px white;">0000</h1>
                                </div>
                            </div>
                        </div>

                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Bunaken Sentraland Cenkareng</p>
                                        <h4 class="mb-0">0000</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-buildings font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm"
                            style="border-radius: 15px; overflow: hidden; background-color: #e6f4f1; min-width: 300px;">
                            <div class="position-relative">
                                <img src="{{ asset('images/gedung-bandar-kemayoran.png') }}" alt="Gedung"
                                    class="w-100" style="height: 180px; object-fit: cover;">
                                <div class="position-absolute top-0 start-0 p-3">
                                    <h4 class="fw-bold mb-0" style="color: #2c3e50;">Tower A4</h4>
                                    <small class="text-muted">Bandar Kemayoran</small>
                                </div>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <h1 class="fw-bold"
                                        style="font-size: 60px; color: black; -webkit-text-stroke: 1px white;">0000</h1>
                                </div>
                            </div>
                        </div>


                        <div class="card mini-stats-wid" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Tower A5 Bandar Kemayoran</p>
                                        <h4 class="mb-0">0000</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="avatar-sm rounded-circle bg-primary">
                                            <span class="avatar-title">
                                                <i class="bx bx-buildings font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <h4 class="mb-3 text-success">
            <i class="bx bx-bar-chart-alt-2 me-2"></i>
            <span class="fw-semibold" style="font-size: 1.25rem;">Monitoring Hunian</span>
        </h4>
        <!-- Status Monitoring -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Status Monitoring</h4>
                    <div id="pie-chart-1" class="chart-container" data-colors='["#34c38f", "#f46a6a"]'></div>
                </div>
            </div>
        </div>
        <!-- Perkembangan Ketaatan -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Perkembangan Ketaatan</h4>

                    <div id="line_chart_dashed" data-colors='["--bs-success", "--bs-warning", "--bs-danger"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!-- Hasil Penilaian Ketaatan -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-5">Hasil Penilaian Ketaatan</h4>
                    </div>

                    <div id="stacked-column-chart" data-colors='["--bs-success", "--bs-warning", "--bs-danger"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <h4 class="mb-3 text-success d-flex align-items-center">
            <i class="bx bx-message-square-detail me-2 fs-4"></i>
            <span class="fw-semibold" style="font-size: 1.25rem;">Klarifikasi</span>
        </h4>
        <!-- Status Pemanggilan -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Status Pemanggilan</h4>
                    <div id="pie-chart-2" class="chart-container" data-colors='["#34c38f","#f1b44c", "#f46a6a"]'>
                    </div>
                </div>
            </div>
        </div>
        <!-- Alasan Tidak Menghuni -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Alasan Tidak Menghuni</h4>
                    <div id="pie-chart-3" class="chart-container"
                        data-colors='["#34c38f","#556ee6", "#f1b44c", "#f46a6a", "#1fdec6"]'>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tempat Tinggal Saat Ini -->
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h4 class="card-title mb-3">Tempat Tinggal Saat Ini</h4>
                    <div id="pie-chart-4" class="chart-container" data-colors='["#34c38f","#556ee6", "#f1b44c"]'>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>

    {{-- pie chart 2 --}}
    <!-- apexcharts -->
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ URL::asset('build/js/pages/apexcharts.init.js') }}"></script>

    {{-- pie chart 3 --}}
    <!-- tui charts plugins -->
    <script src="{{ URL::asset('build/libs/tui-chart/tui-chart-all.min.js') }}"></script>
    <!-- tui charts map -->
    <script src="{{ URL::asset('build/libs/tui-chart/maps/usa.js') }}"></script>
    <!-- tui charts plugins -->
    <script src="{{ URL::asset('build/js/pages/tui-charts.init.js') }}"></script>
@endsection

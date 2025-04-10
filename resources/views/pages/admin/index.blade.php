@extends('layouts.master')

@section('title')
    @lang('translation.Dashboards')

    @lang('translation.Apex_Charts')

    @lang('translation.Toast_UI_Charts')
@endsection

@section('css')
    <!-- tui charts Css -->
    <link href="{{ URL::asset('build/libs/tui-chart/tui-chart.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- style dashboard --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard/style.css') }}">
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
                        <div class="col-md-8 col-9">
                            <select class="form-select" id="idType" aria-label="Default select example">
                                <option value="all">Periode</option>
                                <option value="Full Time">2025 Semester 1</option>
                                <option value="Part Time">2025 Semester 2</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-3 text-end">
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
                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">Kanaya Nuansa Cilangkap</p>
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

                        <div class="card mini-stats-wid me-3" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">A4 Bandar Kemayoran</p>
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

                        <div class="card mini-stats-wid" style="min-width: 300px; scroll-snap-align: start;">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium">A5 Bandar Kemayoran</p>
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
        <!-- Status Monitoring -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Status Monitoring</h4>
                    <div id="pie-chart-1"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- Perkembangan Ketaatan -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Perkembangan Ketaatan</h4>

                    <div id="line_chart_dashed" data-colors='["--bs-primary", "--bs-danger", "--bs-success"]'
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

                    <div id="stacked-column-chart" data-colors='["--bs-primary", "--bs-warning", "--bs-success"]'
                        class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- status klarifikasi -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">Status Klarifikasi</h4>
                    <div id="pie-chart-2"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- alasan tidak menghuni -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">Alasan Tidak Menghuni</h4>
                    <div id="pie-chart-3"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
                </div>
            </div>
        </div>

        <!-- tempat tinggal saat ini -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-1">Tempat Tinggal Saat ini</h4>
                    <div id="pie-chart-4"
                        data-colors='["--bs-primary","--bs-success", "--bs-danger", "--bs-info", "--bs-warning"]'
                        dir="ltr"></div>
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

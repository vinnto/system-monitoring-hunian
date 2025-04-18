@extends('layouts.master-layouts')

@section('title')
    @lang('translation.Horizontal')
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/user-dashboard.css') }}">
@endsection

@section('body')

    <body data-topbar="dark" data-layout="horizontal">
    @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1')
                Home
            @endslot
            @slot('title')
                Dashboards
            @endslot
        @endcomponent

        {{-- User Dashboard --}}
        <div class="row mb-3">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-image-wrapper">
                            <img src="{{ asset('build/images/slide1.png') }}" alt="Slide 1" class="border">
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-image-wrapper">
                            <img src="{{ asset('build/images/slide2.png') }}" alt="Slide 2" class="border">
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="carousel-image-wrapper">
                            <img src="{{ asset('build/images/slide3.png') }}" alt="Slide 3" class="border">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Riwayat Monitoring</h4>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        </th>
                                        <th class="align-middle">No</th>
                                        <th class="align-middle">Periode Monitoring</th>
                                        <th class="align-middle">Status Monitoring</th>
                                        <th class="align-middle">Tanggal Monitoring</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body fw-bold">1</a>
                                        </td>
                                        <td>Semester 1 - 2025</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Sudah</span>
                                        </td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body fw-bold">2</a>
                                        </td>
                                        <td>Semester 2 - 2025</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger font-size-11">Belum</span>
                                        </td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Riwayat Klarifikasi</h4>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        </th>
                                        <th class="align-middle">No</th>
                                        <th class="align-middle">Periode Monitoring</th>
                                        <th class="align-middle">Jadwal Klarifikasi</th>
                                        <th class="align-middle">Tanggal Kehadiran</th>
                                        <th class="align-middle">Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body fw-bold">1</a>
                                        </td>
                                        <td>Semester 1 - 2025</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Sudah</span>
                                        </td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                Surat Pernyataan
                                            </button>
                                            <button type="button"
                                                class="btn btn-warning btn-sm btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                Berita Acara
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="javascript: void(0);" class="text-body fw-bold">2</a>
                                        </td>
                                        <td>Semester 2 - 2025</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-danger font-size-11">Belum</span>
                                        </td>
                                        <td>
                                            07 Oct, 2019
                                        </td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-secondary btn-sm btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                Surat Pernyataan
                                            </button>
                                            <button type="button"
                                                class="btn btn-warning btn-sm btn-rounded waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                Berita Acara
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- Transaction Modal -->
        <div class="modal fade transaction-detailModal" tabindex="-1" role="dialog"
            aria-labelledby="transaction-detailModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="transaction-detailModalLabel">Order Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="{{ URL::asset('build/images/product/img-7.png') }}"
                                                    alt="" class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                                <p class="text-muted mb-0">$ 225 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 255</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div>
                                                <img src="{{ URL::asset('build/images/product/img-4.png') }}"
                                                    alt="" class="avatar-sm">
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                                <p class="text-muted mb-0">$ 145 x 1</p>
                                            </div>
                                        </td>
                                        <td>$ 145</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Sub Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Shipping:</h6>
                                        </td>
                                        <td>
                                            Free
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h6 class="m-0 text-right">Total:</h6>
                                        </td>
                                        <td>
                                            $ 400
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
    @endsection
    @section('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- dashboard init -->
        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
    @endsection

@extends('layouts.master')

@section('title')
    @lang('translation.Form_Elements')
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Forms
        @endslot
        @slot('title')
            Kuesioner Monitoring Hunian Mandiri Semester Ganjil Tahun 2025
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Identitas Penerima Manfaat</h4>

                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Nama Penerima Manfaat</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">NIK Penerima Manfaat</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="123234324" id="example-search-input">
                        </div>
                    </div>
                    <h4 class="card-title">Identitas Unit</h4>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Lokasi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Nuansa Pondok Kelapa" placeholder="Enter Text"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Tower</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Samawa" placeholder="Enter URL"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">No Unit</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="B12" placeholder="Enter Text"
                                id="example-text-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-text-input" class="col-md-2 col-form-label">Luas Tipe</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="12,45" placeholder="Enter text"
                                id="example-text-input">
                        </div>
                    </div>
                    <h4 class="card-title">Identitas Penghuni</h4>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Jumlah Penghuni</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" placeholder="Enter Number"
                                id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Hubungan PM dengan Penghuni</label>
                        <div class="col-md-10">
                            <select class="form-select">
                                <option>Pilih Hubungan</option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Jumlah Kendaraan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" placeholder="Enter Number"
                                id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Jenis Kendaraan</label>
                        <div class="col-md-10">
                            <select class="form-select">
                                <option>Pilih Kendaraan</option>
                                <option>Roda 2</option>
                                <option>Roda 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">No. Plat</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="42" placeholder="Enter Number"
                                id="example-number-input">
                        </div>
                    </div>
                    <h4 class="card-title">Kondisi Unit</h4>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Foto Penerima Manfaat di Depan
                            Unit</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Foto Meteran Air</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Nilai Meteran Air</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="4221,323" placeholder="Enter Number"
                                id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Upload Meteran
                            Air</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="" id="example-date-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Foto Meteran Listrik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-number-input" class="col-md-2 col-form-label">Nilai Meteran Listrik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="4221,23" placeholder="Enter Number"
                                id="example-number-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="example-date-input" class="col-md-2 col-form-label">Tanggal Upload Meteran
                            Listrik</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="" id="example-date-input">
                        </div>
                    </div>

                    <h4 class="card-title">Pernyataan Kesesuaian Program</h4>

                    <div class="mb-3 row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div
                                style="background-color: #f0f0f0; border: 1px solid #ccc; padding: 15px; border-radius: 5px;">
                                <p>Saya selaku Penerima Manfaat menyatakan bahwa data yang saya berikan dalam kuesioner ini
                                    adalah benar, sesuai dengan kondisi yang sebenarnya, dan saya bertanggung jawab
                                    sepenuhnya atas kebenaran informasi tersebut. Apabila di masa monitoring periode
                                    berjalan ditemukan ketidaksesuaian atau pelanggaran terhadap data yang telah saya
                                    berikan, saya bersedia menerima sanksi sesuai dengan ketentuan dan peraturan yang
                                    berlaku.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Row untuk Radio Button --}}
                    <div class="mb-3 row">
                        {{-- Kolom kosong untuk offset agar sejajar dengan inputan di atas --}}
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <div class="form-check form-check-success">
                                <input class="form-check-input" type="radio" id="programAgreement"
                                    name="programAgreement" checked style="width: 1.25em; height: 1.25em;">
                                <label class="form-check-label" for="programAgreement">
                                    Ya, Saya Setuju
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

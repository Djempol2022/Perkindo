@extends('_layout.__main-layout')
@section('section-umum')
    <div class="col bg-primary nav-grad-beranda">
        <div class="d-flex justify-content-center pt-3">
            <div class="col-auto bg-logo">
                <img src="/img/logo.png" style="max-width: 130px; height: auto">
            </div>
        </div>
        <div class="mt-4 text-white text-center">
            <h1>Persatuan Konsultan Indonesia</h1>
            <h1>Kalimantan Barat</h1>
            <span>Suatu Asosiasi Perusahaan Konsultan Perencana dan Pengawas Konstruksi</span>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <button class="btn btn-secondary px-5 btn-rounded"><small>Selengkapnya</small></button>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <img src="/img/hero_image.png" class="hero-section">
        </div>
        <div class="col row justify-content-center gap-3 mt-100">
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">24</h1>
                    <span class="text-dark-grey">Pengurus</span>
                </div>
            </div>
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">122</h1>
                    <span class="text-dark-grey">Anggota</span>
                </div>
            </div>
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">14</h1>
                    <span class="text-dark-grey">Wilayah</span>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-100">
            <div class="col-8 bg-white px-3 py-2 line-oren" style="min-width: 260px">
                <p class="text-secondary fw-bold fs-5 m-0">Breaking News</p>
                <span class="fs-5 fw-semibold">
                    <marquee scrollamount="10">
                        <span class="me-4">Suatu Asosiasi Perusahaan Konsultan Perencana dan Pengawas Konstruksi</span>
                        <span class="me-4">Suatu Asosiasi Perusahaan Konsultan Perencana dan Pengawas Konstruksi</span>
                        <span class="me-4">Suatu Asosiasi Perusahaan Konsultan Perencana dan Pengawas Konstruksi</span>
                    </marquee>
                </span>
            </div>
        </div>
        @include('_layout._footer-main')
    </div>
@endsection

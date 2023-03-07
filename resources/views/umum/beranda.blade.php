@extends('_layout.__main-layout')
@section('section-umum')
    <div class="col bg-primary nav-grad-beranda" style="margin-top: 70px">
        {{-- HEADER BERANDA --}}
        <div class="d-flex justify-content-center pt-3">
            <div class="col-auto">
                <img src="/img/logo-beranda.png" style="max-width: 190px; height: auto">
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
            <video class="hero-section" muted autoplay loop>
                <source src="/video/contoh.mp4" type="video/mp4">
            </video>
        </div>

        {{-- DETAIL ANGGOTA --}}
        <div class="col row justify-content-center gap-3 mt-100">
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">24</h1>
                    <span class="text-dark-grey fw-semibold">Pengurus</span>
                </div>
            </div>
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">122</h1>
                    <span class="text-dark-grey fw-semibold">Anggota</span>
                </div>
            </div>
            <div class="col-auto card border-0 info-pengguna shadow-sm">
                <div class="card-body text-center py-4">
                    <h1 class="fw-bolder">14</h1>
                    <span class="text-dark-grey fw-semibold">Wilayah</span>
                </div>
            </div>
        </div>

        {{-- TEKS BERITA --}}
        <div class="d-flex justify-content-center mt-100">
            <div class="col-10 bg-white px-3 py-2 line-oren" style="min-width: 260px">
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

        {{-- TENTANG KAMI --}}
        <div class="mt-100 row d-flex justify-content-center gap-3">
            <div class="col-lg-5 me-5 tentang-kami">
                <div class="mb-3">
                    <h5 class="text-primary fw-bold">Tentang Kami</h5>
                </div>
                <div class="mb-3">
                    <h4 class="fw-semibold">Ketahui lebih lengkap mengenai PERKINDO Kalimantan Barat</h4>
                </div>
                <small class="fw-semibold">Persatuan Konsultan Indonesia atau yang disingkat PERKINDO adalah Suatu Asosiasi
                    Perusahaan Konsultan
                    Perencana dan Pengawas Konstruksi, yang telah menjadi Kelompok Unsur Lembaga Pengembangan Jasa
                    Konstruksi (LPJK) sesuai dengan Keputusan Menteri Pekerjaan Umum dan Perumahan Rakyat (Menteri PUPR)
                    Nomor : 471/KTPS/M/2016.</small>
                <div class="mt-5 btn-tentang">
                    <button type="button" class="btn btn-primary btn-rounded px-5">Selengkapnya</button>
                </div>
            </div>
            <div class="col-lg-4 ms-5 ps-4 p-3 pe-0 img-tentang">
                <img src="/img/tentang-kami.png" class="img-full">
            </div>
        </div>

        {{-- IKLAN --}}
        <div class="mt-100 d-flex justify-content-center">
            <div class="col-10">
                <img src="/img/contoh-iklan.png" class="img-full rounded-4" alt="">
            </div>
        </div>

        {{-- INFORMASI TERKINI --}}
        <div class="mt-100 d-flex justify-content-center">
            <div class="col-10 text-center">
                <h5 class="text-primary fw-bolder">Informasi</h5>
                <h3 class="fw-semibold">Informasi terkini saat ini</h3>
                <div class="mt-4">
                    <ul class="nav nav-pills gap-4 justify-content-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="btn px-5 py-2 tab-link active" id="berita" data-bs-toggle="pill"
                                data-bs-target="#menu-berita" type="button" role="tab" aria-controls="menu-berita"
                                aria-selected="true">Berita Terbaru</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn px-5 py-2 tab-link" id="agenda" data-bs-toggle="pill"
                                data-bs-target="#menu-agenda" type="button" role="tab" aria-controls="menu-agenda"
                                aria-selected="false">Agenda Terbaru</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="btn px-5 py-2 tab-link" id="lelang" data-bs-toggle="pill"
                                data-bs-target="#menu-lelang" type="button" role="tab" aria-controls="menu-lelang"
                                aria-selected="false">Info Lelang</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        {{-- BERITA TERBARU --}}
                        <div class="tab-pane fade show active" id="menu-berita" role="tabpanel" aria-labelledby="berita"
                            tabindex="0">
                            <div class="row justify-content-center gap-5 mt-5">
                                <div class="col-45 card border-none berita-terbaru">
                                    <div class="m-3 mb-0">
                                        <img src="/img/contoh-card.png" class="card-beranda">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-6 fw-semibold">Suasana Keluarga Besar Anggota DPD PERKINDO
                                            Kalimantan Barat</p>
                                        <a href="#!" class="stretched-link"></a>
                                    </div>
                                </div>
                                <div class="col-45 card border-none berita-terbaru berita-ke-2">
                                    <div class="m-3 mb-0">
                                        <img src="/img/contoh-card.png" class="card-beranda">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-6 fw-semibold">Suasana Kebersamaan Saat Halal Bihalal
                                            PERKINDO Kalimantan Barat</p>
                                        <a href="#!" class="stretched-link"></a>
                                    </div>
                                </div>
                                <div class="col-45 card border-none berita-terbaru berita-ke-3">
                                    <div class="m-3 mb-0">
                                        <img src="/img/contoh-card.png" class="card-beranda">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text fs-6 fw-semibold">Tausiyah Bersama Saat Acara Halal Bihalal
                                            PERKINDO Kalimantan Barat</p>
                                        <a href="#!" class="stretched-link"></a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-rounded mt-5 px-5">Selengkapnya</button>
                        </div>
                        {{-- AGENDA TERBARU --}}
                        <div class="tab-pane fade" id="menu-agenda" role="tabpanel" aria-labelledby="agenda"
                            tabindex="0">
                            <div class="row justify-content-center text-start gap-4">
                                <div
                                    class="row col-55 agenda px-5 py-3 align-items-center gap-4 bg-white rounded-3 justify-content-center">
                                    <div class="col-2 icon-agenda">
                                        <img src="/img/icon-kalender.png" class="img-full" alt=""
                                            style="max-width: 100px">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="fw-semibold m-0">Agenda Malam Keakraban</h5>
                                        <small>20 Januari 2023 - 30 Januari 2023</small>
                                    </div>
                                </div>
                                <div
                                    class="row col-55 agenda justify-content-center agenda-ke-2 px-5 py-3 align-items-center gap-4 bg-white rounded-3">
                                    <div class="col-2">
                                        <img src="/img/icon-kalender.png" class="img-full" alt=""
                                            style="max-width: 100px">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="fw-semibold m-0">Agenda Malam Keakraban</h5>
                                        <small>20 Januari 2023 - 30 Januari 2023</small>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-rounded mt-5 px-5">Selengkapnya</button>
                        </div>
                        {{-- INFO LELANG --}}
                        <div class="tab-pane fade" id="menu-lelang" role="tabpanel" aria-labelledby="lelang"
                            tabindex="0">
                            <div class="row justify-content-center text-start gap-4">
                                <div
                                    class="row col-55 px-5 py-3 align-items-center justify-content-center gap-4 bg-white rounded-3 info-lelang">
                                    <div class="col-2 icon-lelang">
                                        <img src="/img/icon-lelang.png" class="img-full" style="max-width:100px"
                                            alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="fw-semibold m-0">Info Lelang Project Pertama</h5>
                                        <a href="#!">http://google.com</a>
                                    </div>
                                </div>
                                <div
                                    class="row col-55 px-5 py-3 align-items-center justify-content-center gap-4 bg-white rounded-3 info-lelang-2">
                                    <div class="col-2 icon-lelang">
                                        <img src="/img/icon-lelang.png" class="img-full" style="max-width:100px"
                                            alt="">
                                    </div>
                                    <div class="col-9">
                                        <h5 class="fw-semibold m-0">Info Lelang Project Pertama</h5>
                                        <a href="#!">http://google.com</a>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-rounded mt-5 px-5">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- GALERI --}}
        <div class="mt-100 row justify-content-center align-items-center gap-5">
            <div class="col-sm-3 justify-content-center d-flex gambar-galeri">
                <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <img src="/img/tentang-kami.png" class="d-block img-full rounded-4 carousel-galeri">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="/img/contoh-card.png" class="d-block img-full rounded-4 carousel-galeri">
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="/img/tes.png" class="d-block img-full rounded-4 carousel-galeri">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ms-3 teks-galeri">
                <div class="mt-3">
                    <h5 class="text-primary fw-bold">Galeri</h4>
                </div>
                <div class="my-3">
                    <h4 class="fw-semibold">Kumpulan foto kegiatan saat ini</h4>
                </div>
                <p>Tekan tombol selengkapnya untuk melihat lebih lengkap galeri kegiatan PERKINDO Kalimantan Barat yang
                    terkini</p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn-rounded mt-4 px-5"
                onclick="redirect('{{ route('Beranda') }}')">Selengkapnya</button>
        </div>
        @include('_layout._footer-main')
    </div>
@endsection

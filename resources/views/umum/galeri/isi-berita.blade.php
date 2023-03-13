@extends('_layout.__main-layout')
@section('section-umum')
    {{-- HEADER --}}
    <div class="row justify-content-center align-items-center bg-primary nav-grad gap-5">
        <div class="col-6 judul-header">
            <h1 class="text-white fw-semibold display-5">Detail Berita</h1>
            <p class="text-white pe-5 me-5">
                Di bawah ini merupakan isi detail berita PERKINDO Kalimantan Barat
            </p>
        </div>
        <div class="col-3 p-2 vector-img">
            <img src="/img/vector-berita.png" class="img-full">
        </div>
    </div>

    {{-- JUDUL BERITA --}}
    <div class="text-center mt-100">
        <h5 class="text-primary fw-bolder">Detail Berita</h5>
        <div class="text-center" style="margin: 0 300px">
            <h4 class="fw-semibold pt-4">{{ $isi_berita->judul }}</h4>
        </div>
        <span class="fw-regular">{{ Carbon\Carbon::parse($isi_berita->created_at)->translatedFormat('d F Y') }}</span>
    </div>

    {{-- FOTO BERITA --}}
    <div class="d-flex justify-content-center my-4">
        <div class="col-6">
            <img src="{{ $isi_berita->foto }}" class="isi-berita">
        </div>
    </div>

    <div class="section">
        {{-- ISI BERITA --}}
        <div class="text-justify text-berita">
            {{-- {!! $isi_berita->isi !!} --}}
            <p>{{ $isi_berita->isi }}</p>
            <a href="{{ route('Galeri.berita') }}" class="link-primary text-decoration-none">
                <i class="bi bi-caret-left-fill"></i> Kembali ke berita
            </a>
        </div>

        <div class="row mt-100">
            {{-- KOMENTAR --}}
            <div class="col-md-6">
                <h3 class="fw-semibold pb-3">Komentar</h3>
                <div class="col-9 mb-3">
                    <label for="nama" class="form-label fw-regular">Nama Lengkap</label>
                    <input type="text" class="form-control border-primary" id="nama"
                        placeholder="Masukkan Nama Lengkap disini. . .">
                </div>
                <div class="col-9 mb-4">
                    <label for="komentar" class="form-label fw-regular">Isi Komentar</label>
                    <textarea class="form-control border-primary" placeholder="Masukkan komentar disini. . ." id="komentar" rows="6"></textarea>
                </div>
                <div class="col-9">
                    <button type="button" class="btn btn-primary" style="width: 100%">Kirim</button>
                </div>
            </div>

            {{-- RESPON --}}
            <div class="col-md-6">
                <h3 class="fw-semibold pb-3">Berikan Respon Anda</h3>
                <div class="row justify-content-between">
                    <input type="radio" class="btn-check radio-respon" name="options" id="option1" autocomplete="off">
                    <label class="btn col-auto col-respon bg-white p-4 rounded-4 border-0" for="option1">
                        <h5 class="text-center">Menarik</h5>
                        <img src="/img/menarik.png" class="img-full">
                    </label>
                    <input type="radio" class="btn-check radio-respon" name="options" id="option2" autocomplete="off">
                    <label class="btn col-auto col-respon bg-white p-4 rounded-4 border-0" for="option2">
                        <h5 class="text-center">Tidak Menarik</h5>
                        <img src="/img/tidak-menarik.png" class="img-full">
                    </label>
                </div>
            </div>
        </div>
    </div>
    @include('_layout._footer-main')
@endsection

@extends('_layout.__main-layout')
@section('section-umum')
    {{-- HEADER --}}
    <div class="row justify-content-center align-items-center bg-primary nav-grad gap-5">
        <div class="col-6 judul-header">
            <h1 class="text-white fw-semibold display-5">Kumpulan Berita</h1>
            <p class="text-white pe-5 me-5">
                Di bawah ini merupakan kumpulan berita terkini seputar PERKINDO Kalimantan Barat saat ini
            </p>
        </div>
        <div class="col-3 p-2 vector-img">
            <img src="/img/vector-berita.png" class="img-full">
        </div>
    </div>

    {{-- BERTA TERBARU --}}
    <div class="mt-100 section">
        <div class="row justify-content-center bg-white rounded-4 px-4 position-relative">
            <div class="col-12 mt-4">
                <img src="{{ $berita_baru->foto }}" class="berita-terbaru">
            </div>
            <div class="col-12 mt-4">
                <h4 class="fw-bolder">{{ $berita_baru->judul }}</h4>
            </div>
            <div class="col-12">
                <span class="fw-regular">{{ date('d F Y', strtotime($berita_baru->created_at)) }}</span>
            </div>
            <div class="col-12 mb-4 text-end">
                <a href="{{ $berita_baru->slug }}" class="link-primary text-decoration-none fw-regular stretched-link">
                    Selengkapnya <i class="bi bi-caret-right-fill"></i>
                </a>
            </div>
        </div>
    </div>


    {{-- BERITA --}}
    <div class="mt-100 section row d-flex">
        <div class="col-md-6 row col-berita">
            @if (count($berita) > 0)
                <section class="berita-page">
                    @include('umum.galeri._paginate-berita')
                </section>
            @else
                <div class="row">
                    <div class="col-md-6 pe-3">
                        <div class="bg-white rounded-4 p-3 position-relative">
                            <img src="/img/hero_image.png" class="img-full">
                            <p class="fs-small fw-bold pt-3">Acara Halal bihalal Bersama Bpk. Syarif Alwi, SH </p>
                            <small class="fw-regular">12 Juni 2022</small>
                            <div class="text-end mt-3">
                                <a href="#!"
                                    class="fs-small link-primary text-decoration-none fw-regular stretched-link">
                                    Selengkapnya <i class="bi bi-caret-right-fill"></i>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 pe-3">
                        <div class="bg-white rounded-4 p-3 position-relative">
                            <img src="/img/hero_image.png" class="img-full">
                            <p class="fs-small fw-bold pt-3">Acara Halal bihalal Bersama Bpk. Syarif Alwi, SH </p>
                            <small class="fw-regular">12 Juni 2022</small>
                            <div class="text-end mt-3">
                                <a href="#!"
                                    class="fs-small link-primary text-decoration-none fw-regular stretched-link">
                                    Selengkapnya <i class="bi bi-caret-right-fill"></i>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 pe-3">
                        <div class="bg-white rounded-4 p-3 position-relative">
                            <img src="/img/hero_image.png" class="img-full">
                            <p class="fs-small fw-bold pt-3">Acara Halal bihalal Bersama Bpk. Syarif Alwi, SH </p>
                            <small class="fw-regular">12 Juni 2022</small>
                            <div class="text-end mt-3">
                                <a href="#!"
                                    class="fs-small link-primary text-decoration-none fw-regular stretched-link">
                                    Selengkapnya <i class="bi bi-caret-right-fill"></i>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 pe-3">
                        <div class="bg-white rounded-4 p-3 position-relative">
                            <img src="/img/hero_image.png" class="img-full">
                            <p class="fs-small fw-bold pt-3">Acara Halal bihalal Bersama Bpk. Syarif Alwi, SH </p>
                            <small class="fw-regular">12 Juni 2022</small>
                            <div class="text-end mt-3">
                                <a href="#!"
                                    class="fs-small link-primary text-decoration-none fw-regular stretched-link">
                                    Selengkapnya <i class="bi bi-caret-right-fill"></i>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-6 ps-5 iklan-berita">
            <img src="/img/tes.png" class="img-full rounded-4">
        </div>
    </div>

    @include('_layout._footer-main')
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $('body').on('click', '.paginate a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                $.ajax({
                    url: url
                }).done(function(data) {
                    $('.berita-page').html(data);
                }).fail(function() {
                    alert('Articles could not be loaded.');
                });
            }
        });
    </script>
@endsection

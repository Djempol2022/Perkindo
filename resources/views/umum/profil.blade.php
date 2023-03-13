@extends('_layout.__main-layout')
@section('section-umum')
    {{-- HEADER --}}
    <div class="row justify-content-center align-items-center bg-primary nav-grad gap-5">
        <div class="col-6 judul-header">
            <h1 class="text-white fw-semibold display-5">Tentang PERKINDO Kalimantan Barat</h1>
            <p class="text-white pe-5 me-5">
                PERKINDO adalah Suatu Asosiasi Perusahaan Konsultan Perencana dan Pengawas Konstruksi
            </p>
        </div>
        <div class="col-3 p-2 vector-img">
            <img src="/img/vector-profil.png" class="img-full">
        </div>
    </div>


    {{-- KETUA DAN WAKIL --}}
    <div class="col text-center mt-100">
        <h5 class="text-primary fw-bolder">Pejabat Perkindo</h5>
        <h4 class="fw-semibold pt-1">Ketua dan Wakil Perkindo Kalimantan Barat</h4>
        <div class="row justify-content-center gap-5 mt-4">
            <div class="col-lg-2 max-foto-profil">
                <div class="rounded-circle border-secondary">
                    <img src="/img/tes.png" class="img-full rounded-circle">
                </div>
                <div class="col mt-4">
                    <span class="fw-semibold text-secondary fs-5">Ketua Umum</span>
                </div>
                <div class="col">
                    <span class="fw-regular">Iskandar Mukhti, S.T., M.T</span>
                </div>
            </div>
            <div class="col-lg-2 max-foto-profil">
                <div class="rounded-circle border-secondary">
                    <img src="/img/tes.png" class="img-full rounded-circle">
                </div>
                <div class="col mt-4">
                    <span class="fw-semibold text-secondary fs-5">Wakil Ketua Umum</span>
                </div>
                <div class="col">
                    <span class="fw-regular">Nadya Madyania, S.T., M.T</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        {{-- TENTANG PERKINDO --}}
        <div class="col mt-100 text-justify text-justify">
            <p class="fw-regular">Keberadaan suatu perusahaan konsultan yang tunggal dalam melakukan pengembangan dan
                pembinaan
                terhadap jasa
                konsultansi cenderung akan menjadi tidak kompetitif dan menimbulkan diskriminatif, sehingga dalam mewujudkan
                jasa konsultan Nasional yang Keberadaan suatu perusahaan konsultan yang tunggal dalam <span
                    id="dots">...</span><span id="more">melakukan pengembangan dan pembinaan terhadap jasa
                    konsultansi cenderung akan menjadi tidak kompetitif dan menimbulkan diskriminatif, sehingga dalam
                    mewujudkan jasa konsultan Nasional yang profesional, handal dan berdaya saing akan sulit terwujud serta
                    sesuai persyaratan yang dikeluarkan oleh Lembaga Pengembangan Jasa Kontruksi Nasional (LPJKN). Pada
                    bulan maret 2007 terbentuk Dewan Pengurus Daerah PERKINDO Provinsi Kalimantan Barat dimana Titik awal
                    lokasi PERKINDO Kalbar berada di jalan Putri Dara Nante. Pada awal berdirinya PERKINDO Provinsi
                    Kalimantan Barat juga menghadapi berbagai tantangan dan hambatan baik secara internal maupun secara
                    eksternal. Secara internal antara lain belum tersedianya fasilitas sarana dan prasarana yang
                    representatif, minimnya Sumber Daya Manusia yang dimiliki, belum optimalnya kinerja para pengurus,
                    anggota PERKINDO pada umumnya perusahaan baru dan kualifikasi kecil sehingga sulit untuk berkompetisi.
                    Namun dengan tekad dan kerja keras dari pengurus dan anggota, saat ini PERKINDO provinsi Kalimantan
                    Barat berdiri kokoh dengan jumlah Dewan Pengurus Daerah Provinsi Kalimantan Barat 35 pengurus dan dengan
                    184 perusahaan anggota PERKINDO Provinsi Kalimantan Barat.</span></p>
            <a href="#!" onclick="readMore()" id="readMore" class="link-primary text-decoration-none">Read More</a>
        </div>

        {{-- VISI DAN MISI --}}
        <div class="row justify-content-center mt-100 visi">
            <div class="col-lg-6 pe-5 foto-visi d-flex align-items-center"><img src="/img/visi-misi.png" style="width: 80%">
            </div>
            <div class="col-lg-6 mt-5">
                <h3 class="fw-bold">Visi</h3>
                <p class="text-justify lh-lg">
                    Terwujudnya Anggota PERKINDO yang profesional, mandiri dan berdaya saing dalam
                    peran
                    serta pada
                    pembangunan nasional berkelanjutan.
                </p>
                <div class="mt-5">
                    <h3 class="fw-bold">Misi</h3>
                    <ul>
                        <li class="lh-lg">
                            Memperkokoh persatuan dan kesatuan serta meningkatkan kemitraan antar Anggota.
                        </li>
                        <li class="lh-lg">Menjunjung tinggi etika, moral profesi konsultan.</li>
                        <li class="lh-lg">
                            Membangun kemandirian dan menciptakan jaringan pasar serta melayani dan
                            melindungi kepentingan
                            Anggota.
                        </li>
                        <li class="lh-lg">Meningkatkan profesionalisme dan daya saing konsultan.</li>
                        <li class="lh-lg">Meningkatkan pertumbuhan usaha jasa konsultansi seluruh Anggota.</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- STRUKTUR ORGANISASI --}}
        <div class="mt-100 row text-center justify-content-center">
            <h5 class="col-lg-12 text-primary fw-bolder">Struktur Organisasi</h5>
            <h4 class="pt-2 col-lg-6">Berikut Merupakan Struktur Organisasi PERKINDO Kalimantan Barat</h4>
            <div class="col-lg-12">
                <img src="/img/struktur.png" class="img-full">
            </div>
        </div>
    </div>
    @include('_layout._footer-main')
    <script>
        function readMore() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("readMore");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
@endsection

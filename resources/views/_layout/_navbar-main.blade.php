a<nav class="navbar navbar-expand-lg bg-primary px-5 py-1 main-navbar fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand nav-logo col-auto" href="#!" onclick="redirect('{{ route('Beranda') }}')"><img
                src="/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-mobile" id="navbarSupportedContent">
            <ul class="col d-flex justify-content-center navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1">
                    {{-- <a class="nav-link {{ request()->routeIs('Beranda*') ? 'active' : '' }} " aria-current="page"
                        href="#!" onclick="redirect('{{ route('Beranda') }}')">Beranda</a> --}}
                    <a class="nav-link {{ request()->routeIs('Beranda*') ? 'active' : '' }} " aria-current="page"
                        href="{{ route('Beranda') }}">Beranda</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Profil*') ? 'active' : '' }} "
                        href="{{ route('Profil') }}">Profil</a>
                </li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link {{ request()->routeIs('Galeri*') ? 'active' : '' }} dropdown-toggle"
                        href="{{ route('Galeri.kegiatan') }}" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Galeri
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->routeIs('Galeri.berita') ? 'active' : '' }}"
                                href="{{ route('Galeri.berita') }}">Berita</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('Galeri.agenda') ? 'active' : '' }}"
                                href="{{ route('Galeri.agenda') }}">Agenda Kegiatan</a></li>
                        <li><a class="dropdown-item {{ request()->routeIs('Galeri.kegiatan') ? 'active' : '' }}"
                                href="{{ route('Galeri.kegiatan') }}">Galeri Kegiatan</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Layanan*') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('Layanan') }}">Layanan</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Anggota*') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('Anggota') }}">Anggota</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Kontak*') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('Kontak') }}">Kontak</a>
                </li>
            </ul>
            <a href="#!" onclick="redirect('{{ route('Login') }}')"><button
                    class="btn btn-secondary px-5 btn-rounded">Login</button></a>
        </div>
    </div>
</nav>
<div class="arrow-up d-flex z-3">
    <a href="#!" class="rounded-circle stretched-link"><i class="bi bi-arrow-up-short text-white"></i></a>
</div>
<div class="whatsapp d-flex z-3">
    <a href="#!" class="rounded-circle stretched-link"><i class="bi bi-whatsapp text-white"></i></a>
</div>
<div class="email d-flex z-3">
    <a href="#!" class="rounded-circle stretched-link"><i class="bi bi-envelope text-white"></i></a>
</div>
<div class="facebook d-flex z-3">
    <a href="#!" class="rounded-circle stretched-link"><i class="bi bi-facebook text-white"></i></a>
</div>
<div class="instagram d-flex z-3">
    <a href="#!" class="rounded-circle stretched-link"><i class="bi bi-instagram text-white"></i></a>
</div>

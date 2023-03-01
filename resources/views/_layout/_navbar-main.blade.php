<nav class="navbar navbar-expand-md bg-primary px-5 py-1">
    <div class="container-fluid">
        <a class="navbar-brand nav-logo col-auto" href="#!" onclick="redirect('{{ route('Beranda') }}')"><img
                src="/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="col d-flex justify-content-center navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Beranda*') ? 'active' : '' }} " aria-current="page"
                        href="#!" onclick="redirect('{{ route('Beranda') }}')">Beranda</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Profil*') ? 'active' : '' }} " href="#!"
                        onclick="redirect('{{ route('Profil') }}')">Profil</a>
                </li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link {{ request()->routeIs('Galeri*') ? 'active' : '' }} dropdown-toggle"
                        href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#!"
                                onclick="redirect('{{ route('Galeri.berita') }}')">Berita</a></li>
                        <li><a class="dropdown-item" href="#!"
                                onclick="redirect('{{ route('Galeri.agenda') }}')">Agenda Kegiatan</a></li>
                        <li><a class="dropdown-item" href="#!"
                                onclick="redirect('{{ route('Galeri.kegiatan') }}')">Galeri Kegiatan</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Layanan*') ? 'active' : '' }}" aria-current="page"
                        href="#!" onclick="redirect('{{ route('Layanan') }}')">Layanan</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Anggota*') ? 'active' : '' }}" aria-current="page"
                        href="#!" onclick="redirect('{{ route('Anggota') }}')">Anggota</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link {{ request()->routeIs('Kontak*') ? 'active' : '' }}" aria-current="page"
                        href="#!" onclick="redirect('{{ route('Kontak') }}')">Kontak</a>
                </li>
            </ul>
            <a href="#!" onclick="redirect('{{ route('Login') }}')"><button
                    class="btn btn-secondary px-5 btn-rounded">Login</button></a>
        </div>
    </div>
</nav>
<?php

namespace App\Http\Controllers\umum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('umum.beranda');
    }
    public function profil()
    {
        return view('umum.profil');
    }
    public function berita()
    {
        return view('umum.galeri.berita');
    }
    public function agenda()
    {
        return view('umum.galeri.agenda');
    }
    public function galeri()
    {
        return view('umum.galeri.galeri_kegiatan');
    }
    public function layanan()
    {
        return view('umum.layanan');
    }
    public function anggota()
    {
        return view('umum.anggota');
    }
    public function kontak()
    {
        return view('umum.kontak');
    }
}

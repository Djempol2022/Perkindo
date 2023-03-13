<?php

namespace App\Http\Controllers\umum;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    protected $berita;
    public function __construct(Berita $berita)
    {
        $this->berita = $berita;
    }


    public function beranda()
    {
        return view('umum.beranda');
    }


    public function profil()
    {
        return view('umum.profil');
    }


    public function berita(Request $request)
    {
        $berita_baru = Berita::orderBy('id', 'desc')->first();
        $berita = $this->berita->orderBy('id', 'desc')->paginate(4);
        if ($request->ajax()) {
            return view('umum.galeri._paginate-berita', ['berita' => $berita])->render();
        }
        return view('umum.galeri.berita', compact('berita', 'berita_baru'));
    }


    public function isi_berita($slug)
    {
        $isi_berita = Berita::where('slug', $slug)->first();
        return view('umum.galeri.isi-berita', compact('isi_berita'));
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

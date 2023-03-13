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
        <h4 class="fw-semibold pt-4">JUDUL</h4>
        <span class="fw-regular">TANGGAL</span>
    </div>

    {{-- FOTO BERITA --}}
    <div class="d-flex justify-content-center my-4">
        <div class="col-6">
            <img src="/img/hero_image.png" class="isi-berita">
        </div>
    </div>

    <div class="section">
        {{-- ISI BERITA --}}
        <div class="text-justify">
            <p class="pb-4"><span class="ms-5">Lorem</span> ipsum dolor sit amet consectetur, adipisicing elit.
                Voluptas,
                voluptates culpa
                consequatur repellat et
                optio reiciendis repudiandae praesentium? Debitis ea sequi vel eum at quia quidem commodi sint nulla cum,
                non
                itaque distinctio sapiente architecto esse repudiandae aperiam quas a sed modi perferendis, officiis hic
                corporis praesentium? Quas sunt perferendis, minus eum ea cupiditate eos unde assumenda mollitia nisi nulla
                cumque quia esse quibusdam hic doloremque temporibus voluptatibus est illum, magni porro. Excepturi corporis
                accusantium tempora ducimus facere blanditiis, repudiandae magni velit ut optio molestiae. Commodi
                consectetur
                adipisci praesentium perspiciatis consequuntur, sequi, impedit perferendis error molestiae, quos iure.
                Expedita
                natus cum totam ducimus aperiam iusto illum. Beatae voluptatibus recusandae nihil fugiat eligendi non ex
                culpa
                et, qui nostrum architecto ad excepturi autem, aliquid enim facere reprehenderit vitae ipsam, deserunt nam
                voluptate repellat? At nam obcaecati quasi recusandae ipsum nihil ipsa consequuntur saepe sequi, ab adipisci
                qui
                laboriosam alias ut. Veniam, necessitatibus? Sequi reprehenderit corrupti omnis, consectetur esse itaque
                aliquam
                eveniet reiciendis? Vel dicta alias quae est atque, dolor neque ipsam libero in beatae? Delectus explicabo,
                blanditiis enim, doloribus fuga autem laboriosam maxime quo laborum quia esse id provident vitae dolor
                labore
                dolores quae atque? Tenetur unde reprehenderit a velit, odio illo optio totam iure doloribus dignissimos
                nesciunt enim ipsa debitis modi officiis dolores? Blanditiis minus sequi beatae. Dicta quo sequi beatae modi
                nulla quam deserunt voluptatem, quaerat obcaecati odio necessitatibus maiores saepe nihil similique quos
                vero
                architecto, sunt nisi. Dolor aliquam at provident excepturi, doloribus labore nostrum quos porro, impedit
                maxime
                totam eveniet laboriosam amet magni dolores cum rerum. Atque minus officiis eveniet amet quos repellat,
                pariatur
                iusto eligendi nobis ratione ab magnam maxime sunt at architecto corporis animi hic cumque! Quod inventore
                sequi
                obcaecati corporis, consequatur unde neque qui ipsa numquam necessitatibus iusto perspiciatis laudantium,
                veniam
                repellat delectus autem.</p>
            <a href="#!" class="link-primary text-decoration-none">
                <i class="bi bi-caret-left-fill"></i> Kembali ke beranda
            </a>
        </div>

        {{-- KOMENTAR --}}
        <div class="row mt-100">
            <div class="col-md-6">
                <h3 class="fw-semibold pb-3">Komentar</h3>
                <div class="col-9 mb-3">
                    <label for="nama" class="form-label fw-regular">Nama Lengkap</label>
                    <input type="text" class="form-control border-primary" id="nama"
                        placeholder="Masukkan Nama Lengkap disini. . .">
                </div>
                <div class="col-9 mb-4">
                    <label for="komentar" class="form-label fw-regular">Nama Lengkap</label>
                    <textarea class="form-control border-primary" placeholder="Masukkan komentar disini. . ." id="komentar" rows="8"></textarea>
                </div>
                <div class="col-9">
                    <button type="button" class="btn btn-primary" style="width: 100%">Kirim</button>
                </div>
            </div>
            <div class="col-md-6">
                <h3 class="fw-semibold">Berikan Respon Anda</h3>
                
            </div>
        </div>
    </div>
    @include('_layout._footer-main')
@endsection

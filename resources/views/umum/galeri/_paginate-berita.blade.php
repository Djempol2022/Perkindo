<div class="row position-relative grid-gap-1" id="load">
    @foreach ($berita as $data)
        <div class="col-md-6 pe-3 berita">
            <div class="bg-white rounded-4 p-3 position-relative">
                <img src="{{ $data->foto }}" class="img-full">
                <p class="fs-small fw-bold pt-3">{{ $data->judul }}</p>
                <small class="fw-regular">{{ date('d F Y', strtotime($data->created_at)) }}</small>
                <div class="text-end mt-3">
                    <a href="berita/{{ $data->slug }}"
                        class="fs-small link-primary text-decoration-none fw-regular stretched-link">
                        Selengkapnya <i class="bi bi-caret-right-fill"></i>
                </div>
                </a>
            </div>
        </div>
    @endforeach
    <div class="col-md-12 paginate text-center mt-4">
        {{ $berita->links() }}
    </div>
</div>

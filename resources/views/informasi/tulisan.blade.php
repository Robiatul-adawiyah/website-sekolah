@extends('layouts.layouts')

@section('content')


<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <div class="d-flex mb-3">
            <a href="/">Home</a> / <a href="/">Berita</a> / Hari guru smkn 1 rao selatan
        </div>
                        <img src="{{ asset('storage/pengumuman/' . $pengumuman->image)}}" class="img-fluid mb-3">
                        <div class="konten-pengumuman">
                            <p class="mb-3 text-secondary">{{ $pengumuman->create_at}}</p>
                            <h4 class="fw-bold mb-3">{{ $pengumuman->judul}}</h4>
                            <p class="text-secondary">{!! $pengumuman->desc !!}</p>

                        </div>
                    </div>


    </div>

    </section>
</section>
@endsection

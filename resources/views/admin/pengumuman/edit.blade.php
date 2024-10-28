@extends('layouts.layouts')

@section('content')
   <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">

        <div class="d-flex">
            <a href="{{ route('pengumuman')}}">Pengumuman</a>
            <div class="mx-1"> X </div>
            <a href="">Buat Pengumuman</a>
         </div>
<h4>Halaman edit Pengumuman</h4>

<form action="{{ route('pengumuman.update', $pengumuman->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
     <label for="">Masukkan judul pengumuman</label>
     <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $pengumuman->judul )}}">

     @error('judul')
     <div class="invalid-feedback">
        {{ $message }}
     </div>

     @enderror
    </div>

    <div class="form-group mb-4">
        <label for="">Pilih foto pengumuman</label>
        <input type="hidden" name="old_image" value="{{ $pengumuman->image}}">
        <div>
            <img src="{{ asset('storage/pengumuman/' .$pengumuman->image) }}" class="col-lg-4">
        </div>
        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

        @error('image')
        <div class="invalid-feedback">
           {{ $message }}
        </div>

        @enderror
       </div>

       <div class="form-group mb-4">
        <label for="">Artikel pengumuman</label>
       <textarea name="desc" id="summernote">
        {!! $pengumuman->desc !!}
       </textarea>

        @error('desc')
        <div class="text-danger">
           {{ $message }}
        </div>

        @enderror
       </div>

       <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
</section>
@endsection

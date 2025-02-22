@extends('layouts.layouts')

@section('content')
   <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">

        <div class="d-flex">
            <a href="{{ route('pengumuman')}}">Pengumuman</a>
            <div class="mx-1"> X </div>
            <a href="">Buat Pengumuman</a>
         </div>
<h4>Buat Pengumuman</h4>
<form action="{{ route('pengumuman.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-4">
     <label for="">Masukkan judul pengumuman</label>
     <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul')}}">

     @error('judul')
     <div class="invalid-feedback">
        {{ $message }}
     </div>

     @enderror
    </div>

    <div class="form-group mb-4">
        <label for="">Pilih foto pengumuman</label>
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
        {{old('desc')}}
       </textarea>

        @error('desc')
        <div class="text-danger">
           {{ $message }}
        </div>

        @enderror
       </div>

       <button type="submit" class="btn btn-primary">Simpan</button>
</form>
<div class="table-responsive">

    </div>
   </section>
@endsection

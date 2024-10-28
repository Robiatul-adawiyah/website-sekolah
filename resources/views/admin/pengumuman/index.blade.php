@extends('layouts.layouts')

@section('content')
   <section class="py-5" style="margin-top: 100px">
    <div class="container col-xxl-8">
<h4>Halaman Pengumuman</h4>


<a href="{{route('pengumuman.create')}}" class="btn btn-primary py-2">Pengumuman</a>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Informasi</strong> {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
    @endif

<div class="table-responsive py-3">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>image</th>
                <th>judul</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
                @endphp
           @foreach ($pengumumans as $pengumuman)
             <tr>
                <td>{{ $no++ }}</td>
                <td>
                    <img src="{{ asset('storage/pengumuman/' . $pengumuman->image) }}" height="100">
                </td>
                <td>
                    {{ $pengumuman->judul }}
                </td>
                <td>
                    <a href="{{route('pengumuman.edit', $pengumuman->id)}}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengumuman.destroy', $pengumuman->id)}}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
             </tr>
           @endforeach
        </tbody>
    </table>
</div>
    </div>
   </section>
@endsection

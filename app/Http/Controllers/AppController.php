<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Video;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('welcome', [
        'artikels' => Blog::orderBy('id', 'desc')->limit(3)->get(),
        'videos' => Video::orderBy('id', 'desc')->limit(3)->get(),
        'photos' => Photo::orderBy('id', 'desc')->limit(4)->get(),
        'pengumumans' => Pengumuman::orderBy('id', 'desc')->limit(3)->get(),

    ]);
    }

    public function berita()
    {
        return view('berita.berita', [
        'artikels' => Blog::orderBy('id', 'desc')->get(),


    ]);
    }


    public function detail($slug)
    {
        $artikel = Blog::where('slug', $slug)->first();
        return view('berita.detail', [
            'artikel' => $artikel
        ]);
    }

    public function informasi ()
    {
        return view('informasi.informasi',[
            'pengumumans' => Pengumuman::orderBy('id', 'desc')->get(),
        ]);
    }

     public function tulisan ($slug)
     {
        $pengumuman = Pengumuman::where('slug', $slug)->first();
        return view('informasi.tulisan', [
            'pengumuman' => $pengumuman
        ]);
     }
}

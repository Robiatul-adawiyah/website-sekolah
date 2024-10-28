@extends('layouts.layouts')
@section('content')
{{--Jurusan--}}
<!--about section-->
<section id="abaout" class="abaout section padding" style="margin-top: 250px;">
    <div class="section">
   <div class="row">
       <div class="col-lg-4 col-md-12 col-12">
           <div class="about-img">
               <img src="{{ asset('assets/images/tav.jpeg') }}" alt="images" class="img-fluid">
           </div>
       </div>
       <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
           <div class="about-text">
               <h2>Teknik Audiio Video</h2>
               <p>Jurusan TAV adalah salah satu jurusan di SMK yang membekali <br> siswa dengan pengetahuan dan keterampilan di bidang audio dan video.
                   <br>Peluang Kerja Lulusan TAV<br>
                   -Teknisi audio-video.<br>
                   -Industri hiburan <br>
                   -Sound engineer<br>
               </p>
           </div>
       </div>
   </div>

   <div class="section">
   <div class="row">
       <div class="col-lg-4 col-md-12 col-12">
           <div class="about-img">
               <img src="{{ asset('assets/images/tei.jpeg') }}" alt="images" class="img-fluid">
           </div>
           </div>
           <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
               <div class="about-text">
                   <h2>Teknik Elektronika Industri</h2>
                   <p>Jurusan SMK TEI adalah program studi yang mempelajari <br> tentang segala hal yang berkaitan dengan elektronika,<br> khususnya yang digunakan dalam industri
                       <br>Peluang Kerja Lulusan TEI<br>
                       -Teknisi elektronika.<br>
                       -Teknisi otomatisasi<br>
                   </p>
               </div>
           </div>
       </div>

    <div class="section">
       <div class="row">
           <div class="col-lg-4 col-md-12 col-12">
               <div class="about-img">
                       <img src="{{ asset('assets/images/rpl.jpeg') }}" alt="images" class="img-fluid">
                   </div>
               </div>
               <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                   <div class="about-text">
                       <h2>Pengembangan Perangkat Lunak dan Gim</h2>
                       <p>Jurusan Pengembangan Perangkat Lunak(PPLG) di SMK adalah  jurusan yang fokus pada pengembangan perangkat lunak, mengelola,dan memperbaiki berbagai macam aplikasi mulai dari aplikasi sederhana seperti kalkulator hingga aplikasi yang lebih kompleks  seperti game atau aplikasi bisnis.
                           <br>Peluang Kerja Lulusan PPLG<br>
                           -Pemrograman<br>
                           -Basis Data<br>
                       </p>
                   </div>
               </div>
           </div>

           <div class="section">
               <div class="row">
                   <div class="col-lg-4 col-md-12 col-12">
                       <div class="about-img">
                           <img src="{{ asset('assets/images/titl.jpeg') }}" alt="images" class="img-fluid">
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                       <div class="about-text">
                           <h2>Teknik Instalasi Tenaga Listrik</h2>
                           <p>SMK TITL adalah singkatan dari Sekolah Menengah Kejuruan Teknik Instalasi Tenaga Listrik <br>Jurusan ini membekali siswa dengan pengetahuan dan keterampilan khusus di bidang kelistrikan<br>Mulai dari dasar-dasar teori listrik, perakitan rangkaian listrik, hingga instalasi listrik pada bangunan.
                               <br>Peluang Kerja Lulusan TITL<br>
                               -Teknisi Listrik.<br>
                               -Petugas Pemasangan dan Pemeliharaan Kabel Listrik<br>
                           </p>
                       </div>
                   </div>
               </div>

                    <div class="section">
                   <div class="row">
                       <div class="col-lg-4 col-md-12 col-12">
                           <div class="about-img">
                               <img src="{{ asset('assets/images/dkv.jpg') }}" alt="images" class="img-fluid">
                           </div>
                       </div>
                       <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                           <div class="about-text">
                               <h2>Desain Visual Komunikasi</h2>
                               <p>Jurusan Desain Komunikasi Visual (DKV) <br>di SMK adalah jurusan yang sangat menarik bagi kamu yang punya minat di bidang seni, desain, dan teknologi.
                                   <br>Peluang Kerja Lulusan DKV<br>
                                     -Desain Grafis<br>
                                     -Ilustrator<br>
                                     -Animator<br>
                               </p>
                           </div>
                       </div>
                   </div>

                   <div class="section">
                       <div class="row">
                           <div class="col-lg-4 col-md-12 col-12">
                               <div class="about-img">
                                   <img src="{{ asset('assets/images/bp.jpg') }}" alt="images" class="img-fluid">
                               </div>
                           </div>
                           <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                               <div class="about-text">
                                   <h3>Boardcasting dan Perfilman</h3>
                                    <p>Jurusan SMK Broadcasting dan Perfilman adalah program studi yang membekali siswa dengan keterampilan dan pengetahuan di bidang penyiaran (broadcasting) dan pembuatan film.
                                        <br>peluang pekerjaan lulusan BP <br>
                                       -Teknik pengambilan gambar. <br>
                                       -Editing video. <br>
                                       -Penulisan naskah <br>
                                    </p>
                               </div>
                           </div>
                       </div>
</div>
</section>
@endsection

<style>
    .section{
        height: 200px;
    }
    .about-img{
        margin: 20px;

    }
    .about-img img{
        width: 100%;
        height: auto;
        float: center;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 10px;
    }
    .h2{
        text-align: center;
        margin-bottom: 20px;
    }
    .p{
        font-size: 16px;
        letter-spacing: 1px;
        text-align: justify;
        line-height: 1.2;
         margin-top: -10px;
    }
    .abaout-text{
        position: absolute;
        top: 20px;
        line-height: 1.2;
    }
</style><style>
    .section{
        height: 200px;
    }
    .about-img{
        margin: 20px;

    }
    .about-img img{
        width: 100%;
        height: auto;
        float: center;
        margin-top: 10px;
        margin-right: 20px;
        border-radius: 10px;
    }
    .h2{
        text-align: center;
        margin-bottom: 20px;
    }
    .p{
        font-size: 16px;
        letter-spacing: 1px;
        text-align: justify;
        line-height: 1.2;
         margin-top: -10px;
    }
    .abaout-text{
        position: absolute;
        top: 20px;
        line-height: 1.2;
    }
</style>

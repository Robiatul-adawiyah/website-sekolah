@extends('layouts.layouts')
@section('content')
<html>
<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .title {
            color: #2c3e50;
            font-size: 36px;
            font-weight: bold;
        }
        .subtitle {
            color: #2c3e50;
            font-size: 28px;
            font-weight: bold;
        }
        .quote {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 40px;
        }
        .list-item {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .contoh{

            color: #008000;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;




        }
    </style>
</head>
<body>
    <section id="visi py-2" style="margin-top: 100px">
    <div class="container">
        <div class="contoh" style="font-family: poppins;" data-aos="zoom-in">VISI DAN MISI</div>
        <div class="title" style="font-family: poppins">VISI</div>
        <div class="quote" data-aos="fade-left">“Menjadi SMK yang Menghasilkan Lulusan Produktif, Kompetitif, Mandiri, Berakhlak Mulia dan Berdaya Saing dalam Dunia Kerja”.</div>
        <div class="subtitle" style="font-family: poppins">MISI</div>
        <ol>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Memberikan layanan pendidikan yang berorientasi kecakapan hidup (<i>life skill</i>).</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Mengembangkan profesionalisme guru dalam meningkatkan mutu pembelajaran bagi peserta didik.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Melengkapi Sarana dan prasarana pembelajaran untuk mewujudkan pembelajaran yang edukatif, efektif, dan inovatif berlandaskan keikhlasan, kekeluargaan dan keteladanan dengan multi metode berbasis Teknologi Informasi dan Komunikasi (TIK) untuk mengantisipasi tantangan global.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Menghasilkan lulusan yang memiliki kompetensi untuk mampu memasuki pasar tenaga kerja nasional dan internasional (Disiplin, Kerja Keras, Kreatif).</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Menghasilkan lulusan dengan keunggulan kompetitif di era global.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Menanamkan rasa tanggung jawab terhadap kebersihan, keindahan dan kenyamanan sekolah.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Meningkatkan tertib administrasi dan tertib beraktifitas sesuai dengan tugas pokok dan fungsi masing-masing.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Menciptakan lingkungan sekolah yang asri dan kondusif.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Meningkatkan Mutu Pendidikan dan Tenaga Kependidikan yang profesional dan bersertifikasi.</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Membentuk hubungan yang harmonis antara sesama warga sekolah, dengan sekolah lain, masyarakat, pemerintah dan dunia usaha/industri serta perguruan tinggi</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Menjadikan lembaga tempat uji kompetensi (TUK) bertaraf Nasional dan Internasional (Kerja Keras).</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Mengembangkan kerja sama dengan Dunia Usaha/Dunia Industri dan Instansi pemerintah sebagai institusi pasangan (Bersahabat/Komunikatif).</li>
            <li class="list-item" style="font-family: sans-serif" data-aos="fade-left">Mengembangkan kearifan lokal budaya alam minangkabau di lingkungan sekolah dan masyarakat.</li>
        </ol>
    </div>
    <footer class="bg-light text-dark pt-5 pb-4">
        <div class="container text-center text-md-left">
           <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
    <h5 class="text-uppercase mb-4 font-weight-bold text-info">About</h5>
    <hr class="mb-4">
    <p>Sekolah Menengah Kejuruan (SMK) merupakan salah satu jalur pendidikan
        yang sangat penting di Indonesia.
         SMK dirancang untuk mempersiapkan siswa dengan keterampilan dan pengetahuan
         praktis yang relevan dengan dunia kerja. </p>
            </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Web</h5>
        <hr class="mb-4">
        <p>
      <a href="#" class="text-dark" style="text-decoration: none">Situs web</a>
        </p>
        <p>
            <a href="#" class="text-dark" style="text-decoration: none">Contact Kami</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Akun resmi</a>
                  </p>
                  <p>
                    <a href="#" class="text-dark" style="text-decoration: none">Contact Kami</a>
                      </p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Ekskul</h5>
        <hr class="mb-4">
        <p>
      <a href="#" class="text-dark" style="text-decoration: none">Tari</a>
        </p>
        <p>
            <a href="#" class="text-dark" style="text-decoration: none">Osis</a>
              </p>
              <p>
                <a href="#" class="text-dark" style="text-decoration: none">Robotik</a>
                  </p>
                  <p>
                    <a href="#" class="text-dark" style="text-decoration: none">Pramuka</a>
                      </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-info">Hubungi</h5>
        <hr class="mb-4">
        <p>
      <a href="#" class="text-dark" style="text-decoration: none"> account</a>
        </p>
        <p>
           <li class="fas fa-home mr-3"></li>Air hangat 2211, us
              </p>

              <p>
                <li class="fas fa-envelope mr-3"></li>Smkn1@gmail.com
                   </p>

                   <p>
                    <li class="fas fa-phone mr-3"></li>+082381092689
                       </p>

                       <p>
                        <li class="fas fa-print mr-3"></li>Air hangat 2211, us
                           </p>

      </div>

      <hr class="mb-4">
      <div class="row d-flex justify-content-center">
        <div>
         <p>
            Copyright 2024 All Rights Reserved By :
            <a href="#" style="text-decoration: none;">
                <strong class="text-info">Rpl tahun 2024</strong>
            </a>
            </p>
        </div>

      </div>
    </div>
      <div class="row d-flex justify-content-center">
        <div class="text-center">
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><li class="fab fa-facebook"></li></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><li class="fab fa-twitter"></li></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><li class="fab fa-google-plus"></li></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><li class="fab fa-linkedin-in"></li></a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="text-dark"><li class="fab fa-youtube"></li></a>
                </li>

            </ul>
        </div>
      </div>
    </div>
    </div>
    </footer>
    {{-- Footer --}}
</body>
</html>

@extends('layouts.layouts')
@section('content')


<style>
    body {
        background-color: #1a1a1a;
        color: #ffffff;
        font-family: Arial, sans-serif;
    }

    h1 {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        font-family: poppins;
    }
    h2 {
        font-size: 25px;
        color: #ffd700;
        text-align: center;
        font-family: poppins;
        margin-bottom: 40px;
    }
    p {
        font-size: 15px;
        font-weight: italic;
    }
    .highlight {
        color: #ffd700;
    }
    .important {
        color: #ff4500;
    }
    .link {
        color: #ff1493;
    }
    .hero-section {
            position: relative;
            background: url('../../assets/images/2.jpg') no-repeat center center/cover;
            height: 100vh;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        .judul {
            font-family: poppins;
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }
        .judul h1 {
            font-family: poppins;

            font-weight: bold;
        }
        .judul h2 {
            font-family: poppins;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        .btn-primary {
            background-color: #ffc107;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: bold;
            color: black;
        }
        .btn-primary:hover {
            background-color: #e0a800;
        }
        .contact-info {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .contact-info div {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .contact-info i {
            color: #ffc107;
        }
        .footer {
            margin-top: 20px;
    background-color: black; /* Warna latar belakang */
    padding: 20px; /* Jarak di dalam footer */
    text-align: center; /* Rata tengah */
    position: relative; /* Atur posisi jika perlu */

    width: 100%; /* Pastikan lebar penuh */
}
.ct-button {
        background-color: yellow; /* Warna latar belakang tombol */
        color: purple; /* Warna teks pada tombol */
        padding: 5px 20px; /* Jarak antara teks dengan tepi tombol */
        text-align: center; /* Menempatkan teks di tengah tombol */
        text-decoration: none; /* Menghilangkan garis bawah pada link */
        display: inline-block; /* Membuat elemen menjadi blok yang bisa di-inline */
        border: 2px solid rgb(199, 228, 93); /* Membuat border dengan warna putih */
        border-radius: 5px;
        font-family: poppins;
        font-weight: bold;/* Membuat sudut tombol menjadi membulat */
        }
        a {
        color: blue;
        text-decoration: none; /* Menghilangkan garis bawah pada link */
        }



</style>
</head>
<body>
<div class="container" style=" padding: 20px; margin-top: 100px;">
    <h1>SELAMAT DATANG DILAMAN INFORMASI <br>KELULUSAN SISWA TAHUN 2024</h1>
    <h2>Hitung Mundur Pengumuman Kelulusan Siswa Kelas XII Tahun Ajaran 2023/2024</h2>
    <p>Informasi Kelulusan yang tercantum dilaman ini merupakan hasil keputusan yang dikeluarkan oleh sekolah dan melalui Rapat Pleno Dewan Pendidik tentang kelulusan Tanggal <span class="highlight">06 Mei 2024</span>.</p>
    <p>Disampaikan kepada seluruh Peserta Didik Kelas XII SMKN 1 Lubuk Sikaping Tahun Ajaran 2023/2024 bahwa Pengumuman Kelulusan dapat dilihat pada <span class="highlight">Tanggal 06 Mei 2024 mulai pukul 18.00 WIB</span> pada melalui WhatsApp. Berikut cara untuk melihat pengumuman kelulusan.</p>
    <p><strong>Cara pertama :</strong></p>
    <ol>
        <li>Pastikan Ananda masing-masing sudah mempersiapkan NISN. <a href="#" class="link">Cek NISN di grup whatsapp</a></li>
        <li>Setelah memasukkan NISN silahkan di klik tombol Cek Kelulusan. Setelah di klik akan diarahkan ke halaman Informasi kelulusan dan cetak/download bukti kelulusan dalam bentuk file pdf.</li>
        <li>Selesai</li>
        <li>Klik>> <a href="#" class="link">Cek Kelulusan</a></li>
    </ol>
    <p><strong>Cara kedua:</strong></p>
    <p class="important">Ananda yang terkendala atau mengalami kesulitan cek Pengumuman Kelulusan silahkan chat Admin melalui WhatsApp.</p>
    <p>Dan perlu diingat bahwa seluruh peserta didik kelas XII dilarang melakukan tindakan yang tidak bermanfaat seperti mencoret-coret pakaian, melakukan konvoi, serta tindakan-tindakan yang dapat mengganggu ketertiban umum. Bagi mereka yang kedapatan melanggar akan diproses sesuai peraturan yang berlaku.</p>
</div>
<hr style="margin-top: -20px; color:yellow; font-size: 50%;"></hr>
<div class="hero-section">

    <div class="overlay"></div>
    <div class="judul">
        <div class="text-center">
        <h2>SMK NEGERI 1 RAO SELATAN</h2>
        <h1>PUSAT KEUNGGULAN</h1>
        <a class="ct-button" href="https://adminppdb.sumbarprov.go.id/auth/signin/login/">
            >>DAFTAR PPDB
           </a>
    </div>
    </div>
    <div class="contact-info">
        <div>
            <i class="fas fa-phone-alt"></i>
            <span>0753-20365</span>
        </div>
        <div>
            <i class="fas fa-map-marker-alt"></i>
            <span>Jl Medan padang</span>
        </div>
        <div>
            <i class="fas fa-clock"></i>
            <span>06:00 - 00:00</span>
        </div>
    </div>
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
 @endsection

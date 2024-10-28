@extends('layouts.layouts')
@section('content')

<section class="py-5" style="margin-top: 100px">

    <h1 class="text-center fw-bold" style=" color: #008000; font-family:poppins;">Struktur organisasi Smkn 1 Rao Selatan</h1>
    <div class="container text-center">
    <img src="{{asset('assets/images/struktur.jpeg')}}" alt="" height="500px" width="500px" class="img-fluid">
</div>
 <style>
    .img {
        justify-content: center;
        align-items: center;
        display: flex;
    }
 </style>
</section>
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

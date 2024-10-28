@extends('layouts.layouts')
@section('content')

<section class="py-5" style="margin-top: 50px">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.673446107296!2d100.03779657447446!3d0.48826766374035113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302afb06696655ff%3A0xf53699565cb98707!2sSMK%20Negeri%201%20Rao%20Selatan!5e0!3m2!1sid!2sid!4v1728027351801!5m2!1sid!2sid"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div>

            <section class="py-5" style="margin-top: 20px">
<div class="container">
    <div class="row">
        <div class="col-md-6 contact-section">
           <h2 style="color: #2c3e50">Hubungi Kami</h2>
            <hr>
            <p style="color: #2c3e50" class="mb-2"><strong style="color: #2c3e50">SMKN 1 Rao Selatan</strong></p>
            <p style="color: #2c3e50" class="mb-2"><i class="fas fa-map-marker-alt"></i> Jl. Air hangat. Tanjung betung</p>
            <p style="color: #2c3e50" class="mb-2"><i class="fas fa-phone"></i> Telp. (07533) 20365</p>
            <p style="color: #2c3e50" class="mb-2"><i class="fas fa-envelope"></i> admin@smkn1Raoselatan.sch.id</p>
            <hr>
            <p><strong style="color: #2c3e50" class="mb-2">Social Media :</strong></p>
            <div class="social-media">
                <i class="fab fa-facebook-square" style="color:red; border-radius: 50%;" ></i>
                <i class="fab fa-twitter-square" style="color: blue"></i>
                <i class="fab fa-youtube-square"></i>
                <i class="fab fa-instagram-square" style="color:black"></i>
            </div>
        </div>
        <div class="col-md-6 form-section">
            <h2 style="color: #2c3e50">Tinggalkan pesan</h2>
            <hr>
            <form>
                <input type="text" class="form-control" placeholder="Nama">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="No. HP / WA">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <select class="form-control">
                    <option>Jenis Informasi</option>
                    <option>Informasi Sekolah</option>
                </select>
                <input type="text" class="form-control" placeholder="Subject">
                <textarea class="form-control" rows="4" placeholder="Pesan Anda"></textarea>
                <div class="text-center">
                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Kirim Aspirasi</button>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

            </section>
{{-- Footer --}}

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






@extends('layouts.layouts')
@section('content')
<section id="hero">
    <div class="container text-center text-white">
       <div class="hero-title">

        <h1 id="typing"></h1>
        <script src="https://unpkg.com/typeit@@{TYPEIT_VERSION}/dist/index.umd.js"></script>

        </div>
    </div>
  </section>

  <section id="program" style="margin-top: -30px">
   <div class="container col-xxl-9">
    <div class="row">
        <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                <div>
                    <p>Pendidikan  Berkualitas</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan  Teknologi</p>
                        </div>
                        <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <p>Pendidikan  Siap Kerja</p>
                            </div>
                            <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <p>Pendidikan Wirausaha</p>
                                </div>
                                <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
                            </div>


                        </div>




        </div>
    </div>
   </div>




<section id="berita py-2" style="margin-top: 100px" data-aos="zoom-in">
    <div class="project_blog_wrapper">
        <div class="container">
            <h2  style="color: #483d3d; margin-top: 0 px; font-weight: bold; font-family: poppins,"><span style="color: blueviolet">Ber</span>ita</h2>
            <h5 style="color: #2c3e50;">Aktifitas & <span style="color: blueviolet">kabar terbaru</span></h5>
            <div class="row">
                <div class="col-12 text-center">

                </div>


    @foreach ($artikels as $item)
    <div class="col-lg-4 col-md-6 col mb-2">
        <div class="card border-0">
            <img src="{{ asset('storage/artikel/' . $item->image)}}" class="img-fluid mb-3" style="border-radius: 10px; box-shadow: 0 0 25px #ddd;">
            <div class="konten-berita">
                <p style="margin-top: -15px; margin-left: 10px">{{ $item->created_at->format('d-m-Y H:i') }}</p>
                <h4 class="fw-bold mb-1 me-3" style="font-size: 1.3rem;
    font-weight: 500;
    color: #272727;">{{ Str::limit ($item->judul, 30) }}</h4>
                <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-danger me-3" style="margin-top: -15px;">Selengkapnya</a>
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="footer-berita text-center">
<a href="/berita" class="btn btn-outline-danger  mb-2 mt-4">Berita Lainnya</a>
</div>

</div>

</section>


{{--Jurusan--}}

<div class="our-house">
    <div class="container" data-aos="flip-left">
        <h1><span style="font-family: poppins; color:blueviolet">JURUSAN SMKN</span> 1 RAO SELATAN</h1>
        <p>Hallo selamat datang di smkn 1 rao selatan, <span style="color:blueviolet">sekolah memiliki tujuh jurusan di kabupaten pasaman.</span></p>
         <!-- Swiper -->
         <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/dkv.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/titl.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/tkj.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/tav.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/tkj.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/tei.jpeg')}}" alt="">

                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/images/rpl.jpeg')}}" alt="">

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>



        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
           var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {

        575: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });
        </script>



{{--Jurusan--}}



{{--guru--}}



<section id="guru mb-10" style="background-color: rgb(185, 224, 185)">
    <h5 class="text-center mb-40" style="margin-bottom: 40px; font-weight: bold; color: #2c3e50; font-family: poppins,"><span style="color: blueviolet">Tenaga</span> Pendidik</h5>
<div class="gallery-wrap responsive" style="margin-top: -30px">
    <img src="{{ asset('assets/images/back.png') }}" id="backBtn">
        <div class="gallery" style="margin-bottom: 30px;">
            <div>
                <span><img src="{{ asset('assets/images/ibukgusti (1).jpeg') }}"></span>
                <span><img src="{{ asset('assets/images/ibukmira.jpeg') }}"></span>
                <span><img src="{{ asset('assets/images/ibukmira.jpeg') }}"></span>


            </div>
            <div>

                <span><img src="{{asset('assets/images/mira.JPG')}}"></span>
                <span><img src="{{asset('assets/images/mei.JPG')}}"></span>
                <span><img src="{{asset('assets/images/dewi.JPG')}}"></span>


            </div>
        </div>
    <img src="{{ asset('assets/images/next.png') }}" id="nextBtn">
    </div>
</section>

<script>
let scrollContainer = document.querySelector(".gallery");
let backBtn = document.getElementById("backBtn");
let nextBtn = document.getElementById("nextBtn");

scrollContainer.addEventListener("wheel", (evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
    scrollContainer.style.scrollBehavior = "auto";
});

nextBtn.addEventListener("click", ()=>{
    scrollContainer.style.scrollBehavior = "smooth";
    scrollContainer.scrollLeft += 900;
})

backBtn.addEventListener("click", () => {
    scrollContainer.style.scrollBehavior = "smooth";
        scrollContainer.scrollLeft -= 900;
})

</script>

<div class="wrapper">
    <img src="{{asset('assets/images/about.png')}}" alt="" class="content">
    <div class="text-box">
        <h2>About us Smk 1 Rao</h2>
        <p  data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque qui nesciunt dolore ab consequatur quam excepturi quasi, est sit fugiat repudiandae nam odio facilis repellendus, quisquam in tenetur assumenda impedit veniam doloremque similique! Aut optio nesciunt, beatae corrupti quae laboriosam voluptate error sed minima voluptas vero tenetur incidunt! Nostrum, cumque.

        </p>
        <button class="read-more-btn">
            Read More
           </button>

    </div>
</div>

{{--ekskul--}}
<section id="ekskul"  style="background-color: #2c3e50;" style="margin-top: 50px">
    <div class="container info-section">
        <div class="row">
         <div class="col-md-6 info-image">
          <img src="{{ asset('assets/images/3.jpeg') }}" width="500" height="600px" style=" box-shadow: 0 0 25px black; border-radius: 15px"/>
         </div>
         <div class="col-md-6 info-content">
          <h2 style="color: green; font-family: poppins">
          Ekstrakurikuler
          <hr style="color: white"></hr>
          </h2>
          <p style="font-family: sans-serif">
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam hic magnam fugit exercitationem neque, quae laborum earum natus. Ullam maxime assumenda facere ea quasi accusamus dolores delectus tempora animi, expedita iste.
          </p>
          <div class="info-stats">
           <div class="stat">
            <h3>
                <img src="{{ asset('assets/images/test1.jpeg') }}" alt="" height="150px" width="150px">
            </h3>

           </div>
           <div class="stat">
            <h3>
                <img src="{{ asset('assets/images/test2.jpeg') }}" alt="" height="150px" width="150px">
            </h3>


           </div>
           <div class="stat">
            <h3>
                <img src="{{ asset('assets/images/test3.jpeg') }}" alt="" height="150px" width="150px">
            </h3>

           </div>
          </div>
         </div>
        </div>
       </div>
    </section>
<style>

    .line{
    width: 100px;
    height: 2px;
    background-color: burlywood;
    margin: auto;
}
</style>
{{--ekskul--}}







{{--Video--}}

<section id="video_youtube" class="py-5"  data-aos="flip-left">
<div class="container py-5">
<div class="header-berita text-center">
    <h2 class="fw-bold">Video kegiatan smk</h2>
</div>

<div class id="yutub">
<div class="row py-5">
    @foreach ($videos as $item)
    <div class="col-lg-4">
        <iframe width="100%" height="215" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    @endforeach
</div>


<div class="footer-berita text-center py-3">
    <a href="" class="btn btn-outline-danger">Video Lainnya</a>
</div>
</div>
</section>






{{--Ekskul--}}


{{--Ekskul--}}


<section id="foto" class="section-foto parallax">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white me-2">Foto kegiatan</h5>
            </div>
            <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
        </div>

        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-lg-3 col-md-6 col-6 mb-4">
                    <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}" style="border-radius: 20px;">
                        <img src="{{ asset('storage/photo/' . $photo->image) }}" alt="" class="img-fluid">
                    </a>
                    <p class="text-center fw-bold" style="font-family: poppins, font-size: 15px;">{{$photo->judul }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


{{--pengumuman--}}

<section id="berita py-2" style="margin-top: 100px" data-aos="zoom-in">
    <div class="project_blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class=" mb-4 head_text" style="font-weight: bold; font-family: poppins; color: #2c3e50;">pengumuman</h2>
                </div>


    @foreach ($pengumumans as $item)
    <div class="col-lg-4 col-md-6 col mb-2">
        <div class="card border-0">
            <img src="{{ asset('storage/pengumuman/' . $item->image)}}" class="img-fluid mb-3" style="border-radius: 10px;">
            <div class="konten-berita">
                <p class="mb-3 text-secondary me-3">{{ $item->created_at->format('d-m-Y H:i') }}</p>
                <h4 class="fw-bold mb-3 me-3">{{ $item->judul }}</h4>
                <p class="text-secondary me-3">#Smk bisa</p>
                <a href="/tulisan/{{ $item->slug }}" class="text-decoration-none text-danger me-3">Selengkapnya</a>
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="footer-berita text-center">
</div>

</div>

</section>




{{--pengumuman--}}

{{--prestasi--}}
<section id="blog" data-aos="fade-down">
    <!--blog-heading--------------->
    <div class="blog-heading">
      <span>prestasi diperoleh kami</span>
      <h3>Prestasi</h3>
    </div>


    <!--container---------------->
    <div class="blog-container">

      <!--box-1------------->
      <div class="blog-box">

        <!--img---->
        <div class="blog-img">
          <img alt="blog" src="{{ asset('assets/images/prestasi1.jpeg') }}">
        </div>
        <!--text--->
        <div class="blog-text">
          <span>18 July 2024 / admin</span>
          <a href="#" class="blog-title">Melukis/ Desain komunikasi Visual</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
          <a href="{{ route('prestasi') }}">Read More</a>
        </div>

      </div>




      <!--box-2------------->
      <div class="blog-box">

        <!--img---->
        <div class="blog-img">
          <img alt="blog" src="{{ asset('assets/images/prestasi2.jpeg') }}">
        </div>
        <!--text--->
        <div class="blog-text">
          <span>18 July 2024 / admin</span>
          <a href="#" class="blog-title">Juara 1 penerangan Sesumbar/TITL</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
          <a href="{{ route('prestasi') }}">Read More</a>
        </div>

      </div>




      <!--box-3------------->
      <div class="blog-box">

        <!--img---->
        <div class="blog-img">
          <img alt="blog" src="{{ asset('assets/images/prestasi3.jpeg') }} ">
        </div>
        <!--text--->
        <div class="blog-text">
          <span>18 July 2024 / admin</span>
          <a href="#" class="blog-title">Best Presentasi sesumbar/ Broadasting & perfileman</a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facilis modi veritatis adipisci omnis perferendis deleniti tempore quasi? Explicabo recusandae soluta vel cum perspiciatis consequuntur dolorum distinctio minima voluptate quae?</p>
          <a href="{{ route('prestasi') }}">Read More</a>
        </div>

      </div>

    </div>

  </section>




{{--prestasi--}}


{{--fasilitas--}}

<section id="fasilitas" class="section-foto fasilitas" style="margin-top: 10px">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white me-2">Fasilitas</h5>
            </div>
            <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
        </div>

        <div class="row">
                <div class="col-lg-3 col-md-6 col-6 mb-4">
                       <img src="{{asset('assets/images/fasilitas.jpeg')}}" alt="" class="img-fluid">
        </div>
    </div>
</section>

{{--fasilitas--}}

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

@endsection



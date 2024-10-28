@extends('layouts.layouts')
@section('content')

<section class="py-5" style=" background-color: #2c3e50; margin-top: 100px">

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
@endsection

@extends('layouts.layouts')

@section('content')
<section style="margin-top: 50px">


  <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

        <!--------------------------- Left Box ----------------------------->

        <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
            style="background:  #103cbe;">
            <div class="featured-image mb-3">
                <img src="{{asset('assets/images/smk.png')}}" class="img-fluid" style="width: 250px;">
            </div>
            <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Hello
                admin👋
            </p>
            <small class="text-white text-wrap text-center"
                style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Login dan Tambahkan
            artikel</small>
        </div>

        <!-------------------- ------ Right Box ---------------------------->

        <div class="col-md-6 right-box">
            <div class="row align-items-center">
                <div class="header-text mb-4">
                    <h2>Hello,Again</h2>
                        <p>We are happy to have you back.</p>
                </div>
                    <form action="/login" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                        </div>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Forgot Password?</a></small>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-success w-100 fs-6">Login</button>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{asset('assets/images/google.jpeg')}}" style="width:20px"
                                    class="me-2"><small>Sign In with Google</small></button>
                        </div>
                        <div class="row">
                            <small>Don't have account? <a href="#">Sign Up</a></small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
                    </form>

<style>
    .box-area{
    width: 930px;
}

/------------ Right box ------------/

.right-box{
    padding: 40px 30px 40px 40px;
}

/------------ Custom Placeholder ------------/

::placeholder{
    font-size: 16px;
}

.rounded-4{
    border-radius: 20px;
}
.rounded-5{
    border-radius: 30px;
}


/------------ For small screens------------/

@media only screen and (max-width: 768px){

     .box-area{
        margin: 0 10px;

     }
     .left-box{
        height: 100px;
        overflow: hidden;
     }
     .right-box{
        padding: 20px;
     }

}
</style>
@endsection

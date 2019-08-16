@extends('frontend.master')

{{-- this title section shoot home page for the web page --}}
@section('title', 'home page')


@section('content')



{{-- <!-- Start jumbotron --> --}}


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="Home">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ url('Images/Business.jpg') }}" alt="First slide">
            <div class="carousel-caption">
                <h3 class="display-3">Choose BICT</h3>
                    <p class="lead">We are waiting to build your career More info... </p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Contact us</a>
                    </p>
                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ url('Images/Footer.png')}}" alt="Second slide">
            <div class="carousel-caption">
                <h5>Second slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img  class="d-block w-100" src="{{url('Images/success.jpg')}}" alt="Third slide">
            <div class="carousel-caption">
                <h5>Third slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


{{-- <!-- End jumbotron --> --}}


{{-- <!-- Start feature --> --}}
{{-- copied from Getbootstrap component:
    ref : https://getbootstrap.com/docs/4.3/components/carousel/#with-indicators--}}

<div class="container text-center pt-5" id="feature">
    <h1>Our Features</h1>
    <p class="pt-2">Some Features</p>
</div>

<div class="container text-center pt-4">
    <div class="row">
    <div class="col-4">
        <img src="{{ url('Images/Clock.png')  }}" class="img-fluid sub">
    </div>
    <div class="col-4">
    <img src="{{ url('Images/Chat.png') }}" class="img-fluid sub">
    </div>
    <div class="col-4">
        <img src="{{ url('Images/Menu.png') }}" class="img-fluid sub">
    </div>
</div>
</div>

<div class="container text-center pt-5">
    <div class="row py-5">
        <div class="col-4">
            <h3 class="st-head"> Estd 1995 </h3>
            <p> We are guiding you to Industry since
            </p>
        </div>
        <div class="col-4">

            <h3 class="st-head"> Well Trained </h3>
            <p class="justify-text-center"> Our Lectures are well experianced</p>
        </div>

        <div class="col-4">
                <h3 class="st-head"> Flexible Time </h3>
                <p class="justify-text-center"> We teach you on your time</p>
        </div>
    </div>

</div>

{{-- <!-- End feature --> --}}


{{-- <!-- Start parralex --> --}}


<div class="container-fluid">
    <div class="parallax">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                    <h1>Our Goal is......!</h1>
            </div>
            <div class="col-2"></div>
            <div class="col-4">

                <h1> We Make &nbsp; Your Future Bright...</h1>
            </div>
        </div>
    </div>
</div>



{{-- <!-- End parralex --> --}}


{{-- <!-- Start Aboutus --> --}}

<div class="container" id="About">
    <div class="row mt-5 mb-5">
        <div class="col-6" >
            <h1>
                About Us
            </h1>
            <p>
                British Informatics of Computer Technology is one of the best Institute in Heart of Colombo at Wellawatta since 1995.
                Our Institute has approval from TVEC and Foreign Ministry.
            </p>

        </div>
        <div class="col-6" mt-3>
           <img src="{{ url('Images/tvec.png')}}" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
    </div>
</div>

{{-- <!-- End About us --> --}}
@stop



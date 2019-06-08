 {{-- Copyright by Nuzrath
    this site created for the bit final project --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- fav icon link -->
    <link rel="shortcut icon" href="{{ asset('../favicon.ico') }}">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>BICT - @yield('title')</title>
</head>

{{-- scrop spy reference -> https://www.w3schools.com/bootstrap4/bootstrap_scrollspy.asp   --}}
<body>
        <!-- Start header -->
        <header>

            @include('frontend.navMaster')

        </header>


 <!-- End header section -->



        @yield('content')





<!-- Footer start -->
@include('frontend.footer')
<!-- Footer end -->

<!-- JQuary 4 cdn links -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!-- End JQuary 4 cdn links -->
<!-- bootstrap 4 cdn links -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>

<!--END  bootstrap 4 cdn links -->
<link rel="stylesheet" href="{{  url('css/mystyle.css')  }}">

</body>
</html>

{{-- This for the ADMIN PAGE MASTER backend
    top and left section and center part comes from the yield
    template downloaded from
    getbootstrap website ref: https://getbootstrap.com/docs/4.0/examples/dashboard/#

    modified by nuzrath --}}
<html lang="en">
<head>

    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">




<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


<!-- Bootstrap core CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- from ref select2  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/css/select2.min.css" rel="stylesheet" />


<!-- custom css link from public folder -->
<link rel="stylesheet" href="{!! asset('custom/css/custom.css')   !!}">





<link href="dashboard.css" rel="stylesheet">


<title>BICT - @yield('title')</title>



</head>
<body>

<header>

    <nav class="navbar navbar-expand-md navbar-dark bg-info">
        <!-- Collapse button code start-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse" aria-expanded="false"
                    aria-controls="contentId">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Collapse button code end -->
            <!-- Navigation bar top -->


        <a href="{{ url('/')}}" class="navbar-brand bg-info">
         <!-- Nav Image added -->
        <img src="{{ url('Images/Logo.png') }}" alt="Logo" style="width:40px;">
            BICT
        </a>

        <!-- START this div is for collapse work from this point -->
        <div class="collapse navbar-collapse" id="navCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin')}}">Admin panal</a>
            </li>

            <li class="nav-item">
                    <a class="nav-link">link 2</a>
            </li>

            <li class="nav-item">
                    <a class="nav-link">link 3</a>
            </li>
        </ul>

        <!-- END this div is for collapse work from this point -->
        </div>
    <!-- Navigation bar top END -->
    </nav>

</header>

@yield('content')





<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- custom select2.org js file cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.11/js/select2.min.js"></script>

<!-- custom link from public folder -->
<script src="{!! asset('custom/js/custom.js')  !!}"></script>

</body>
</html>

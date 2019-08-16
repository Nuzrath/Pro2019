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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                <a class="nav-link">link 1</a>
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


</body>
</html>

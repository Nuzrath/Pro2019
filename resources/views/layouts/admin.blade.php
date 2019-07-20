{{-- This for the ADMIN PAGE MASTER backend
    top and left section and center part comes from the yield
    template downloaded from get bootstrap website ref: https://getbootstrap.com/docs/4.0/examples/dashboard/#

    modified by nuzrath --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <!-- Jquery cdn file link -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">


    <title>BICT - @yield('title')</title>


</head>
<body>



    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top">
        <!-- Collapse button code start-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navCollapse" aria-expanded="false"
                    aria-controls="contentId">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- Collapse button code end -->
    <!-- Navigation bar top -->


    <a href="{{ url('/')}}" class="navbar-brand bg-info">
        <img src="{{ url('../Images/Logo.png') }}" alt="Logo" style="width:40px;"> BICT</a> <!-- Nav Image added -->

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


@yield('content')


</body>
</html>

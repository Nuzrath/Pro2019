{{-- Start navication  --}}

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/')}}">
        <img src="{{ url('../Images/Logo.png') }}" alt="Logo" style="width:40px;"> BICT
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponse">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponse">


            <!-- Links -->
            <ul class="navbar-nav ml-auto bg-transperent">
                <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#feature">Courses</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact us</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="#">Verfication</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Log in
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Teacher</a>
                    <a class="dropdown-item" href="#">Admin</a>
                    <a class="dropdown-item" href="#">Student</a>
                </div>
                </li>
            </ul>

  </nav>

  {{-- end navigation--}}

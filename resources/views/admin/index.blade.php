  @extends('layouts.admin')

  @section('title', 'Dashboard')




    @section('content')

    <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-8 ">
                    <div class="card">
                        <div class="card-header">ADMIN Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <h2> STAFF </h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('staff.index')  }}" role="button"> Staff list</a>
                            <a name="" id="" class="btn btn-primary" href="{{ route('staff.create')  }}" role="button"> Create Staff </a>
                            <br>
                            <br>

                            <h2> SUBJECT </h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('subject.index')  }}" role="button"> Subject List</a>
                            <a name="" id="" class="btn btn-primary" href="{{ route('subject.create')  }}" role="button"> Create Subject </a>


                            <br>
                            <br>

                            <h2> STUDENT </h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('student.index')  }}" role="button"> Student List </a>
                            <a name="" id="" class="btn btn-primary" href="{{ route('student.create')  }}" role="button"> Create Student </a>


                            <br>
                            <br>

                            <h2> COURSE </h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('course.index')  }}" role="button"> Course List </a>
                            <a name="" id="" class="btn btn-primary" href="{{ route('course.create')  }}" role="button"> Create Course </a>


                            <br>
                            <br>

                            <h2> CLASS ROOM</h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('classroom.index')}}" role="button"> Class Room List </a>
                            <a name="" id="" class="btn btn-primary" href="{{ route('classroom.create')  }}" role="button"> Create Class Room </a>


                            <br>
                            <br>

                            <h2> Reciept</h2>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"> Receipt List </a>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"> Create Reciept </a>
                            <br>
                            <br>

                            <h2> Certificate Details</h2>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"> Certificate List </a>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"> Create Certificate </a>

                            <br>
                            <br>

                            <h2> Visitors Inquiry List</h2>
                            <a name="" id="" class="btn btn-primary" href="{{ route('contact.index')}}" role="button"> Contact Us Details </a>
                            <a name="" id="" class="btn btn-primary" href="#" role="button"> Create Reciept </a>


                            <br>
                            <br>


                        </div>
                    </div>
                </div>
            </div>
        </div>





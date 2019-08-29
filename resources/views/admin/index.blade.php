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
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Edit Staff </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Staff </a>

                               <br>
                               <br>

                               <h2> SUBJECT </h2>
                               <a name="" id="" class="btn btn-primary" href="{{ route('subject.index')  }}" role="button"> Subject List</a>
                               <a name="" id="" class="btn btn-primary" href="{{ route('subject.create')  }}" role="button"> Create Subject </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Subject </a>

                               <br>
                               <br>

                               <h2> STUDENT </h2>
                               <a name="" id="" class="btn btn-primary" href="{{ route('student.index')  }}" role="button"> Student List </a>
                               <a name="" id="" class="btn btn-primary" href="{{ route('student.create')  }}" role="button"> Create Student </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Studnet </a>

                               <br>
                               <br>

                               <h2> COURSE </h2>
                               <a name="" id="" class="btn btn-primary" href="{{ route('course.index')  }}" role="button"> Course List </a>
                               <a name="" id="" class="btn btn-primary" href="{{ route('course.create')  }}" role="button"> Create Course </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Course </a>

                               <br>
                               <br>

                               <h2> CLASS ROOM</h2>
                               <a name="" id="" class="btn btn-primary" href="{{ route('classroom.index')}}" role="button"> Class Room List </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Edit Course </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Course </a>

                               <br>
                               <br>

                               <h2> Reciept</h2>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Receipt List </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Create Reciept </a>
                               <a name="" id="" class="btn btn-primary" href="#" role="button"> Delete Reciept</a>

                               <br>
                               <br>


                        </div>
                    </div>
                </div>
            </div>
        </div>





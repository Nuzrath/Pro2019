@extends('layouts.admin')

@section('title', 'Course List - admin view')

@section('content')

<div class="container">
{{--  container start  --}}
    <div class="row">
{{--  row start  --}}

        <div class="col-md-12 mx-auto mt-5">
            {{--  col md start  --}}

            @include('inc.form_error')

            <div class="panel panel-default">
                {{--  panel default start  --}}
               

                <div class="panel panel-heading">
                    <h3>Course List
                        <a class="btn btn-small btn-success float-right" href="{{ route('course.create')}}">  Add Course</a>
                        <br/>
                    </h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                  
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial No</th>
                          <th>Couse ID</th>
                          <th>Course Name</th>
                          <th>Course Amount</th>
                          <th>Duration</th>
                          <th>Created At</th>
                          <th>Updated</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($courses)
                            @foreach($courses as $course)
                            <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->course_id}}</td>
                            <td><a href="{{ route('course.edit', $course->id)}}">{{$course->course_name }}</a></td>
                            <td>{{$course->course_fee }} </td>
                            <td>{{$course->duration }} </td>
                            <td>{{$course->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            <td>{{$course->updated_at }}  </td>
                                {{-- ->diffForHumans()}}</td> --}}
                            {{-- <td> <a href="course/{{$course->id}}"> Show </a> --}}
                           
                            <td>  <a class="btn btn-info" href="{{ route('course.show', $course->id )}}">Show</a></td>
                            <td> <a class="btn btn-primary" href="{{route('course.edit',$course->id)}}">Edit</a></td>
                            
                            
                            <td> 
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger" onclick="retrun myFunction();">delete</button>
                                </form>
                            @include('inc.delconfirm')
                            </td>

                            @endforeach
                            @endif
                            </tr>
                      </tbody>
                    </table>
                    {{--  panel body end  --}}

                    </div>


                {{--  panel end  --}}
            </div>

            {{--  col md end  --}}
        </div>


{{--  row end  --}}
    </div>
{{--  container end  --}}
</div>

@stop



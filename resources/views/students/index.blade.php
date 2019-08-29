@extends('layouts.admin')

@section('title', 'Student List - admin view')

@section('content')

<div class="container">
{{--  container start  --}}
    <div class="row">
{{--  row start  --}}

        <div class="col-md-12 mx-auto mt-5">
            {{--  col md start  --}}

            <div class="panel panel-default">
                {{--  panel default start  --}}

                <div class="panel panel-heading">
                    <h3>Student List</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    <p>Staff Details table</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Full Name</th>
                          <th>Address</th>
                          {{-- <th>Date of Birth</th> --}}
                          <th>Mobile</th>
                          <th>E-Mail</th>
                          {{-- <th>Home</th> --}}
                          <th>NIC/ Passport</th>
                          <th>Gender</th>
                          {{-- <th>Qualification</th> --}}
                          <th>is active</th>
                          {{-- <th>Staff Pic</th> --}}
                          {{-- <th>Role </th> --}}
                          <th>Created At</th>
                          <th>Updated</th>




                        </tr>
                      </thead>




                      <tbody>
                        @if($students)
                            @foreach($students as $student)
                            <tr>
                            <td>{{$student->std_id}}</td>
                            <td><a href="{{ route('student.edit', $student->std_id)}}">{{$student->fname . " " .$student->lname}}</a></td>
                            <td>{{$student->address .", " .$student->city}}</td>
                            <td>{{$student->email}}</td>
                            {{-- <td>{{$student->dob}}</td> --}}
                            <td>{{$student->contact1}}</td>
                            <td>{{ $student->nic }}</td>
                            {{-- <td>{{ $student->nic_no ? $student->nic_no : $student->passport_no}}</td> --}}
                            <td>{{$student->gender}}</td>
                            <td>{{$student->is_active==0?"Not Active":"Active"}} </td>
                            {{-- <td>{{$student->role->name}}</td> --}}
                            <td>{{$student->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            <td>{{$student->updated_at }}  </td>
                                {{-- ->diffForHumans()}}</td> --}}

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



@extends('layouts.admin')

@section('title', 'Staff List - admin view')

@section('content')

<div class="container">
{{--  container start  --}}
    <div class="row">
{{--  row start  --}}

        <div class="col-md-12 mx-auto mt-5">
            {{--  col md start  --}}
            {{--  @include('inc.form_error')  --}}
            @include('inc.form_error')

            <div class="panel panel-default">
                {{--  panel default start  --}}

                <div class="panel panel-heading">
                    <h3>Staff List
                    <a class="btn btn-small btn-success float-right" href="{{ route('staff.create')}}" type="button"> Add Staff</a>
                
                </h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

       
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Staff ID</th>
                          <th>Full Name</th>
                          <th>Address</th>
                          <th>E-Mail</th>
                          {{-- <th>Date of Birth</th> --}}
                          <th>Mobile</th>
                          {{-- <th>Home</th> --}}
                          <th>NIC/ Passport</th>
                          <th>Gender</th>
                            <th>Qualification</th>
                          <th>is active</th>
                          {{-- <th>Staff Pic</th> --}}
                          <th>Role </th>
                          {{-- <th>Created At</th>
                          <th>Updated</th> --}}




                        </tr>
                      </thead>




                      <tbody>
                        @if($staffs)
                            @foreach($staffs as $staff)
                            <tr>
                            <td>{{$staff->id}}</td>
                            <td><a href="{{ route('staff.edit', $staff->id)}}">{{$staff->fname . " " .$staff->lname}}</a></td>
                            <td>{{$staff->address .", " .$staff->country}}</td>
                            <td>{{$staff->email}}</td>
                            {{-- <td>{{$staff->dob}}</td> --}}
                            <td>{{$staff->contact1}}</td>
                            <td>{{ $staff->nic_no }}</td>
                            {{-- <td>{{ $staff->nic_no ? $staff->nic_no : $staff->passport_no}}</td> --}}
                            <td>{{$staff->gender}}</td>
                            <td>{{$staff->Qualification}}</td>
                            <td>{{$staff->is_active==0?"Not Active":"Active"}} </td>
                            <td>{{$staff->role->name}}</td>
                            {{-- <td>{{$staff->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            {{-- <td>{{$staff->updated_at }}  </td>
                                ->diffForHumans()}}</td> --}} 
                            <td><a class="btn btn-info" href="{{ route('staff.show', $staff->id) }}">Show</a></td>
                            <td> <a class="btn btn-primary" href="{{route('staff.edit',$staff->id)}}">Edit</a> </td>

                            <td> 
                                <form action="{{ route('staff.destroy', $staff->id) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger" onclick="return myFunction();">delete</button>
                                </form>
                                @include('inc.delconfirm')
                            </td>
                            @endforeach
                            @endif
                            </tr>
                      </tbody>
                    </table>
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



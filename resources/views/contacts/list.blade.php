@extends('layouts.admin')

@section('title', 'Contact Client List - Admin view')

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
                    <h3>Contact Form Detail List</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    <p>Course Details table</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial No</th>
                          <th>Name</th>
                          <th>Contact No</th>
                          <th>Email</th>
                          <th>Request Course</th>
                          {{-- <th>Status</th> Shoule check this details --}}
                          <th>Comment</th>
                          <th>Created At</th>
                          <th>Updated</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if($contacts)
                            @foreach($contacts as $contact)
                            <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td><a href="{{ route('course.edit', $contact->id)}}">{{$contact->name }}</a></td>
                            <td>{{$contact->contact_no }} </td>
                            <td>{{$contact->email }} </td>
                            <td>{{$contact->course }} </td>
                            <td>{{$contact->comment}} </td>

                            <td>{{$contact->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            <td>{{$contact->updated_at }}  </td>
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



@extends('layouts.admin')

@section('title', 'Subject List - admin view')

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
                    <h3>Subject List</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    <p>Subject Details table</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Serial No</th>
                          <th>Subject ID</th>
                          <th>Subject Name</th>
                          <th>Created At</th>
                          <th>Updated</th>
                        </tr>
                      </thead>

                      <tbody>
                        @if($subjects)
                            @foreach($subjects as $subject)
                            <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->subject_id}}</td>
                            <td><a href="{{ route('subject.edit', $subject->subject_id)}}">{{$subject->subject_name }}</a></td>
                            <td>{{$subject->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            <td>{{$subject->updated_at }}  </td>
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


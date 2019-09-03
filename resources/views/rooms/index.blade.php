@extends('layouts.admin')

@section('title', 'Class Room list')

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
                        <h3>Class Room List</h3>

                    </div>

                    <div class="panel panel-body">
                        {{--  panel Body working space start  --}}

                        <p>Class Room Details table</p>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Room ID</th>
                              <th>Name of Class Room</th>
                              <th>No of Seats</th>
                              <th>No of Computer</th>
                              <th>Type of Class</th>
                              <th>Availability</th>
                              <th>Remark</th>
                              <th>Created At</th>
                              <th>Updated</th>




                            </tr>
                          </thead>




                          <tbody>
                            @if($rooms)
                                @foreach($rooms as $room)
                                <tr>

                                <td><a href="{{ route('classroom.edit', $room->id)   }}">{{$room->id}}</a></td>
                                 <td>{{$room->class_name}}</td>
                                 <td>{{$room->no_of_seat}}</td>
                                 <td>{{$room->no_of_computer}}</td>
                                 <td>{{$room->availability==1? "YES": "NO"}}</td>
                                 <td>{{$room->no_of_seat}}</td>

                                 <td>{{$room->Remark}}</td>
                                <td>{{$room->created_at }} </td>
                                    {{-- ->format('d/m/y')}}</td> --}}
                                <td>{{$room->updated_at }}  </td>
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

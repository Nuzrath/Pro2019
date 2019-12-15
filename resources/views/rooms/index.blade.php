@extends('layouts.admin')

@section('title', 'Class Room list')

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
                        <h3>Class Room List
                            <a class="btn btn-small btn-success float-right" href="{{ route('classroom.create')}}" type="button"> Add Class Room</a>
                        <br/>
                        </h3>
                        
                        
                    </div>

                    <div class="panel panel-body">
                        {{--  panel Body working space start  --}}

                        
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
                                 <td> {{ $room->types_of_class }}</td>
                                 <td>{{$room->availability==1? "YES": "NO"}}</td>

                                 <td>{{$room->Remark}}</td>
                                <td>{{$room->created_at }} </td>
                                    {{-- ->format('d/m/y')}}</td> --}}
                                <td>{{$room->updated_at }}  </td>
                                    {{-- ->diffForHumans()}}</td> --}}

                                    <td>  <a class="btn btn-info" href="{{ route('classroom.show', $room->id )}}">Show</a></td>
                                    <td> <a class="btn btn-primary" href="{{route('classroom.edit',$room->id)}}">Edit</a></td>
                                    
                                    <td> 
                                        <form action="{{ route('classroom.destroy', $room->id) }}" method="POST">
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

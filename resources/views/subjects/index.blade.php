@extends('layouts.admin')

@section('title', 'Subject List - admin view')

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
                    <h3>Subject List
                        <a class="btn btn-small btn-success float-right" href="{{ route('subject.create')}}"> Add Subject</a>
                        <br/>
                    </h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    

                   
                    
                    <table class="table">
                      <thead>
                        <tr>
                        
                        <th>Subject ID</th>
                        <th>Subject Name</th>
                        <th>Created At</th>
                        <th>Updated</th>
                        <th> </th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($subjects)
                            @foreach($subjects as $subject)
                            <tr>

                            <td>{{$subject->id}}</td>
                            <td><a <a href="{{ route('subject.edit', $subject->id)}}">{{$subject->subject_name }}</a></td>
                            <td>{{$subject->created_at }} </td>
                                {{-- ->format('d/m/y')}}</td> --}}
                            <td>{{$subject->updated_at }}  </td>
                                {{-- ->diffForHumans()}}</td> --}}
                            <td>  <a class="btn btn-info" href="{{ route('subject.show', $subject->id )}}">show</a></td>
                            <td> <a class="btn btn-primary" href="{{route('subject.edit',$subject->id)}}">Edit</a></td>
                            <td>   
                                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                               <!-- we will add this later since its a little more complicated than the other two buttons -->
                              {{--  {{ Form::open(array('url' => '/subject' . $subject->id)) }}  --}}
                                  {{--  {{ Form::hidden('_method', 'DELETE') }}  --}}
                                  {{--  {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                                {{ Form::close() }}  --}}</td>
                
                                

                                {{--  <td> <a class="btn btn-danger" href="#" onclick="return confirm('Are you sure?')"> Delete </a>
                                <form id="delete-subject" action="{{ route('subject.destroy', $subject->id)}}" method="POST">
                                <input type="hidden" name="" value="delete">
                                {{ csrf_field() }}    
                                </form></td>  --}}
                        <td>
                                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return myFunction();">delete</button>
                                </form>
                            
                                {{--  <a class="btn btn-danger" onclick="return myFunction();" href="{{route('city-delete', $result->my_id)}}"><i class="fa fa-trash"></i></a>  --}}

                                @include('inc.delconfirm')</td>

            
        
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


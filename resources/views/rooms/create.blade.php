@extends('layouts.admin')

@section('title', 'Create Class Room')

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
                    <h3>Create Class Room</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    {!! Form::open(['method'=>'POST', 'action'=> 'RoomController@store']) !!}

                    <div class="form-group">

                        {!! Form::label('class_name', 'Class Name :' ) !!}

                        {!! Form::text('class_name', null, ['class'=>'form-control']) !!}

                    </div>


                    <div class="form-group">

                        {!! Form::label('no_of_seat', 'Total No of Seats' ) !!}

                        {!! Form::text('no_of_seat', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('no_of_computer', 'Total No Computers' ) !!}

                        {!! Form::text('no_of_computer', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('types_of_class', 'Type of Class :' ) !!}

                        {!! Form::text('types_of_class', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">


                            {!! Form::label('availability', 'Class Room Availablity :' ) !!}

                            {{--  Yes  --}}
                            {!! Form::radio('availability','1',true,  [ 'class' => 'form-group'])      !!}
                            {!! Form::label('availability', 'Available' ) !!}
                             {{--  No  --}}
                            {!! Form::radio('availability','0',false,  [ 'class' => 'form-group'])      !!}
                            {!! Form::label('availability', 'Not Available' ) !!}
 {{--  Reference collected from  -> https://www.tutcodex.com/laravel-collective-html-form-builder/  --}}
                    </div>

                    <div class="form-group">

                        {!! Form::label('Remark', 'Additional Note :' ) !!}

                        {!! Form::text('REMARK', null, ['class'=>'form-control']) !!}

                </div>


                    <div class="form-group">
                        {!! Form::submit('Save Class Room') !!}
                    </div>






                {!! Form::close() !!}


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



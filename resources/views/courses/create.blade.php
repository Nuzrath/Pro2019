@extends('layouts.admin')

@section('title', 'Create Course')

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
                    <h3>Course Creating Form</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    {!! Form::open(['method'=>'POST', 'action'=> 'CourseController@store']) !!}

                    <div class="form-group">

                        {!! Form::label('course_id', 'Course ID :' ) !!}

                        {!! Form::text('course_id', null, ['class'=>'form-control']) !!}

                    </div>


                    <div class="form-group">

                        {!! Form::label('course_name', 'Course Name :' ) !!}

                        {!! Form::text('course_name', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('duration', 'Duration :' ) !!}

                        {!! Form::text('duration', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                            {!! Form::label('course_fee', 'Course Fee :' ) !!}

                            {!! Form::text('course_fee', null, ['class'=>'form-control']) !!}

                    </div>

                    <div class="form-group">

                        {!! Form::label('admission_fee', 'Admission Fee :' ) !!}

                        {!! Form::text('admission_fee', null, ['class'=>'form-control']) !!}

                </div>


                    <div class="form-group">
                        {!! Form::submit('Add Course') !!}
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



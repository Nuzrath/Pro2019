@extends('layouts.admin')

@section('title', 'Create Subjects')

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
                    <h3>Create Subject</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    {!! Form::open(['method'=>'POST', 'action'=> 'SubjectController@store']) !!}

                    <div class="form-group">

                        {!! Form::label('subject_id', 'Subject ID :' ) !!}

                        {!! Form::text('subject_id', null, ['class'=>'form-control']) !!}

                    </div>


                    <div class="form-group">

                        {!! Form::label('subject_name', 'Subject Name :' ) !!}

                        {!! Form::text('subject_name', null, ['class'=>'form-control']) !!}

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



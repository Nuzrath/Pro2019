@extends('layouts.admin')

@section('title', 'Edit Course')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Course Edit by Admin</div>

                <div class="panel-body">


                    {!! Form::model($course, ['method'=>'PATCH', 'action'=> ['CourseController@update', $course->id]] ) !!}


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

                                {!! Form::label('course_fee', 'Fee Amount :' ) !!}

                                {!! Form::text('course_fee', null, ['class'=>'form-control']) !!}

                        </div>


                    <div class="form-group">

                        {!! Form::label('admission_fee', 'Admission Fee :' ) !!}

                        {!! Form::text('admission_fee', null, ['class'=>'form-control']) !!}

                </div>


                        <div class="form-group">
                            {!! Form::submit('update Course') !!}
                        </div>






                    {!! Form::close() !!}

                </div><!--//end panel body -->
            </div> <!--//end  panel default end--->
        </div><!--//col md closer-->
    </div><!-- //row closer-->
</div> <!--//end container fluid-->




@stop

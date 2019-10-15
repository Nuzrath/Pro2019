@extends('layouts.admin');
@section('Title', 'Student edit Form')

@section('content')

<h3>Student Update for Admin View </h3>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        @include('inc.form_error')




        {!! Form::model($student, ['method'=>'PATCH', 'action'=> ['StudentController@update', $student->std_id]] ) !!}


        <div class="form-group">
            {!! Form::label('std_id', 'Student ID', ['class' => 'col-lg-2 control-label']) !!}

            {{--  {!! Form::email('email', null, ['class' => 'form-control',]) !!}  --}}
            {{$student->std_id}}
        </div>

        <div class="form-group">
            {!! Form::label('fname', 'First Name:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('fname', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lname', 'Last Name:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('lname', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Address:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('address', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('city', 'City:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('city', null, ['class' => 'form-control',]) !!}
        </div>


        <div class="form-group">
            {!! Form::label('country', 'country:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('country', null, ['class' => 'form-control',]) !!}
        </div>


        <div class="form-group">
            {!! Form::label('dob', 'Date of Birth:', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::date('dob', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contact1', 'Mobile Phone No :', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('contact1', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contact2', 'Home No :', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('contact2', null, ['class' => 'form-control',]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nic', 'National ID No :', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::text('nic', null, ['class' => 'form-control',]) !!}
        </div>




        <div class="form-group">
            {!! Form::label('gender', 'Gender :', ['class' => 'form-check-label']) !!}


                    {!! Form::label('male', 'MALE', null) !!}
                    {!! Form::radio('gender', 'male', ['id' => 'gender']) !!}


                    {!! Form::label('female', 'FEMALE', null) !!}
                    {!! Form::radio('gender', 'female', ['id' => 'gender']) !!}


        </div>



        <div class="form-group">
            {!! Form::label('email', 'Email Address:', ['class' => 'col-lg-2 control-label']) !!}

            {{--  {!! Form::email('email', null, ['class' => 'form-control',]) !!}  --}}
            {{$staff->email}}
        </div>


        <div class="form-group">
            {!! Form::label('is_active', 'Status :', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::select('is_active', array(1=>'Active', 2=>'Not Active'),null, ['class' => 'form-control',]) !!}
        </div>

        {{-- <div class="form-group">
            {!! Form::label('role_id', 'Role :', ['class' => 'col-lg-2 control-label']) !!}

            {!! Form::select('role_id', $roles, null,['class'=>'form-control',])!!}
        </div> --}}

        </div>







        <div class="form-group">
        {!! Form::submit('update staff', ['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}




        </div>
    </div>
</div>



@stop


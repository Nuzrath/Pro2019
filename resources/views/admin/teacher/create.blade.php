@extends('layouts.admin')

@section('title', 'Staff Subject relation')

@section('content')

<div class="container">
    {{--  container start  --}}

    <div class="panel panel-default">
        {{--  panel default start  --}}

        <div class="panel panel-heading">
            <h3>SUBJECT STAFF many to many relationship Form</h3>



                            </div>

                            <div class="panel panel-body">
                                {{--  panel Body working space start  --}}

                                {!! Form::open(['method'=>'POST', 'action'=> 'TeacherController@store']) !!}

                                <div class="form-group">

                                    {!! Form::label('staff_id', 'Staff :' ) !!}

                                    {!! Form::select('staff_id',[''=>'choose Staff']+$staffs, 1,['class'=>'col-md-4 form-control'])!!}

                                </div>


                                <div class="form-group">

                                    {!! Form::label('subject_id', 'Select Subjects:' ) !!}

                                    {!! Form::select('subjects[]', $subjects, null, ['multiple' => 'multiple', 'class' => 'form-control subjects']) !!}

                                </div>




                                {{-- <div class="form-group">

                                    {!! Form::label('admission_fee', 'Admission Fee :' ) !!}

                                    {!! Form::text('admission_fee', null, ['class'=>'form-control']) !!}

                            </div> --}}


                                <div class="form-group">
                                    {!! Form::submit('Add Subject to Teacher') !!}
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


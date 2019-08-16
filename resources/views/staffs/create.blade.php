@extends('layouts.admin')



@section('content')
<div class="container-fluid" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

		<!-- ==== error checking ==
		server side validation if error occurs-->
		@if(count($errors)>0)
			@foreach($errors->all as $error)
		<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
		@endif
	<!---
	===if successfully added to db ====
	this is will pop up msg from StaffControll@store method
	return redirect('/create')->with('response','Staff added sucessfully');

	-->
		@if(session('response'))
			<div class="alert alert-success"> {{ session('response') }}</div>

		@endif

            <div class="panel panel-default">
                <div class="panel-heading">Staff Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('staff.store') }}" style="-webkit-margin-bottom-collapse: 50px;margin-top='120px;';">
                        {{ csrf_field() }}
<!-- This is my work-->

<!-- fname for first name-->


                        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <label for="fname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control" name="fname" value="John"required autofocus >
<!--value="{{ old('fname') }}"--->
                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!-- lname for last name-->
                        <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <label for="lname" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control" name="lname" value="cena" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!-- home address #-->
                       <div class="form-group">
							<label for="address" class="col-md-4 control-label">Address</label>

							<div class="col-md-6">
							<input id="address" type="textbox" class="form-control" name="address" placeholder="eg: 26, 1st lane wellawatta" value="No 1 1st chapel lane, colombo 06" required>
							</div>

						</div>


<!-- home address Country-->
                        <div class="form-group">
							<label for="country" class="col-md-4 control-label">Country</label>

							<div class="col-md-6">
							<input id="country" type="textbox" class="form-control" name="country" placeholder="eg.sri lanka" value="Sri Lanka">
							</div>
						</div>


<!-- Date of Birth it should be drop down at this movement just type as input-->
                        <div class="form-group">
							<label for="dob" class="col-md-4 control-label">Date of Birth</label>

							<div class="col-md-6">
							<input id="dob" type="date" class="form-control" name="dob" placeholder="YYYY-MM-DD" value="12.02.1998" required>
							</div>
						</div>

<!-- should be display show age near by this -->

<!-- contact no1 -->
                        <div class="form-group{{ $errors->has('contact1') ? ' has-error' : '' }}">
                            <label for="contact1" class="col-md-4 control-label">Mobile No:</label>

                            <div class="col-md-6">
                                <input id="contact1" type="text" class="form-control" name="contact1" value="0713123456" required autofocus>

                                @if ($errors->has('contact1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!-- contact no2 -->
                        <div class="form-group{{ $errors->has('contact2') ? ' has-error' : '' }}">
                            <label for="contact2" class="col-md-4 control-label">Home No:</label>

                            <div class="col-md-6">
                                <input id="contact2" type="text" class="form-control" name="contact2" value="{{ old('contact2') }}">

                                @if ($errors->has('contact2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


<!-- NIC No-->
                        <div class="form-group">
							<label for="nic" class="col-md-4 control-label">National ID No:</label>

							<div class="col-md-6">
							<input id="nic" type="textbox" class="form-control" name="nic" placeholder="xxxxxxxxxxxxxV" value="55555555555V">
							</div>
						</div>


<!-- Passport No-->
                        <div class="form-group">
							<label for="passport_no" class="col-md-4 control-label">Passport No:</label>

							<div class="col-md-6">
							<input id="passport_no" type="textbox" class="form-control" name="passport_no" placeholder="xxxxxxxxxxxxx" value="N1705235">
							</div>
						</div>


<!-- gender	-->
				<div class="form-group">
					<label for="gender" class="col-md-4 control-label">Gender </label>
						<div class="form-check">
						  <label class="form-check-label">
							<input type="radio" class="form-check-input" name="gender" id="gender" value="male" checked>
							Male
						  </label> <br>
							<label class="form-check-label">
								<input type="radio" class="form-check-input" name="gender" id="gender" value="female">
								Female
							</label>
						<!-- <label class="form-check-label">
								<input type="radio" class="form-check-input" name="gender" id="gender" value="non_binary">
								Non-binary
							</label>-->
						</div>

				</div>




<!-- email address -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



<!-- enrollment Date should be detact from create by -->

<!--
                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">status</label>

                            <div class="col-md-6">
                                <input id="status" type="inbox" class="form-control" name="status" value="{{ old('status') }}">

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
				-->

		<!-- ======role	-->

					<div class="form-group">
						<div class="col-5">
						  <label for="role_id" class="col-md-4 control-label">Role</label>

						 {!! Form::select('role_id',[''=>'choose role']+$roles, 1,['class'=>'col-md-4 form-control'])!!}
						  </div>

					</div>



















<!-- Date of Birth
                        <div class="form-group">
							<label for="city" class="col-md-4 control-label">City</label>

							<div class="col-md-6">
							<input id="city" type="textbox" class="form-control" name="city" placeholder="eg.colombo 06" required>
							</div>
						</div>


<!-- emial address
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
						-->


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

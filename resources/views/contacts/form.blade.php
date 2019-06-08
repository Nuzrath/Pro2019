@extends('frontend.master')


{{-- this title section shoot home page for the web page --}}
@section('title', 'Contact page')


@section('content')





<div class="container mt-auto" >
    <div class="row">
        <div class="col-md-8 col-md-offset-2 mt-5">

		<!-- ====== Validation server side =====
            this will display on on contact.php page if successfull			-->
			@if(count($errors)>0)
				@foreach($errors->all() as $error)
			<div class="alert alert-danger"> {{ $error }} </div>
				@endforeach
			@endif

				<!-- this response is comes from ContactController -->
		@if(session('response'))
			<div class="alert alert-success">{{ session('response') }}</div>

		@endif

			<!-- validation end -->


            <div class="card-default">

             <div class="card-heading mt-auto"><h3>Contact us</h3>

                </div>
                <hr/>




				<div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ action('ContactController@store') }}">

                        {{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Your Name *</label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- email input -->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Your E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" option>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<!-- end email input -->

						<!-- start contct no -->
						<div class="form-group{{ $errors->has('contact_no') ? ' has-error' : '' }}">
                            <label for="contact_no" class="col-md-4 control-label">Contact No *</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="tel" class="form-control" name="contact_no" value="{{ old('contact_no') }}" placeholder="0777 123456" maxlength="10" required autofocus>

                                @if ($errors->has('contact_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


						<!-- end contact no-->

						<!-- start course -->

						<div class="form-group{{ $errors->has('course') ? ' has-error' : '' }}">
                            <label for="course" class="col-md-4 control-label">Course *</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control" name="course" value="{{ old('course') }}" placeholder="Dip in Business management" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comment/ Request</label>

                            <div class="col-md-6">
                                <textarea id="comment" type="textarea" class="form-control" name="comment" value="{{ old('comment') }}" >

							</textarea>

                                @if ($errors->has('course'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

						<div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>


                            </div>
                        </div>
					</form>
                    <h4> Note : </h4><p> Please fill this form for any kind of inquiries. We will contact you soon</p>
                    Required fields are marked *
				</div>
			</div>
		</div>


                    <div class="col-lg-4 col-md-4 col-sm-4 mt-5" data-scroll-reveal="enter from the bottom after 0.4s">

                                <h3>Our Location</h3>
                                <hr />
                                {{-- <div>  --}}
                                    <h4 class="add1"><img src="{{ url('/Images/icons/address.png')}}" class="img-fluid icon" alt="Address"> 13 A |1<sup>st</sup> Chapel Lane | Colombo 06  <br>  &nbsp;Sri Lanka. </h4>

                                    <h4 class="add1"><img src="{{ url('/Images/icons/tel.png')}}" class="img-fluid icon" alt="Telephone"> (+94) 11 2 081594 | (+94) 11 2 081759 </h4>
                                    <h4 class="add1"><img src="{{ url('/Images/icons/email1.png')}}" class="img-fluid icon" alt="Email"> bictstudy@gmail.com</h4>
                    </div>


               </div>

        </div>
            {{-- end row --}}

            <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.115837775831!2d79.85923781427678!3d6.87672254503071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25bb864c7548b%3A0x48010a3f747a39cc!2sBritish+Information+of+Computer+Technology!5e0!3m2!1sen!2slk!4v1546241585500" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>



            </div>
</div>
{{-- end container --}}


@stop

@extends('layouts.admin')

@section('title', 'Subject Individual Detail, Subject Vs Course Vs Teacher - admin view')

@section('content')

<!-- This section is take from getbootstrap 3.3.7 version examples and modified by Nuzrath -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>{{ $subject->subject_name }}</h1>
        <p>This is a template for a simple marketing or informational website.
        It includes a large callout called a jumbotron and three supporting pieces of content.
        Using it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
                <div class="col-md-5>


                    <div class="my-3 p-3 bg-white rounded shadow-sm">
                        <h3 class="border-bottom border-gray pb-2 mb-0">Includes Courses </h3>
                        @foreach ($subject->courses as $course)
                        <div class="media text-muted pt-3">
                        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">{{$course->course_name}}</strong>
                        </p>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-md-2"></div>


                <div class="col-md-4>
                    <div class="my-3 p-3 bg-white rounded shadow-sm">
                            <h3 class="border-bottom border-gray pb-2 mb-0">Teaches this subject </h3>
                            @foreach ($subject->staffs as $staff)
                            <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">{{ $staff->fname.' '.$staff->lname }}</strong>
                            </p>
                            </div>
                            @endforeach

                        </div>
                    </div>



        </div>

      </div>

      <hr>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


    @stop

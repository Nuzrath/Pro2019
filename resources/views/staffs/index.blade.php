@extends('layouts.admin')

@section('title', 'Staff Index')

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
                    <h3>Staff List</h3>

                </div>

                <div class="panel panel-body">
                    {{--  panel Body working space start  --}}

                    <p>Staff Details table</p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Staff ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Address</th>
                          <th>Country</th>
                          <th>Date of Birth</th>
                          <th>Contact 1</th>
                          <th>Contact 2</th>
                          <th>NIC/ Passport</th>
                          <th>Gender</th>
                          <th>Qualification</th>
                          <th>is active</th>
                          <th>Staff Pic</th>
                          <th>Role </th>
                          <th>Created At</th>
                          <th>Updated</th>




                        </tr>
                      </thead>




                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
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



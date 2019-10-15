@extends('layouts.admin')

@section('title', 'Staff Subject - Teacher List')

@section('content')

<div class="container">{{--  container start  --}}

    <div class="row">{{--  row start  --}}

       <div class="col-md-12">


        <table>
            <thead>

                <th>No</th>
                <th>Staff Name</th>
                <th>Select Subjects</th>
            </thead>
            <tbody>
                @if(count($teachers)==0)
                <tr>
                    <td colspan="3" class="text-center">
                        No Teacher Available
                    </td>
                </tr>
                @else
                @foreach ($teachers as $teacher)
                <tr>
                    <td> {!! $teacher->id !!} </td>
                    <td> {!! $teachers->staff_id !!} </td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>

       </div>

    </div>{{--  row Emd  --}}

</div> {{--  container End  --}}


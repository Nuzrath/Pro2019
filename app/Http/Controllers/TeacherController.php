<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Staff;
use App\Subject;
use App\Teacher;


// use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      //  $staff = Staff::all();
       // $subjects = Subject::all();
       $teachers=Teacher::all();

        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $staffs =Staff::pluck ('lname','staff_id')->all();

        $subjects=Subject::pluck('subject_name', 'subject_id')->all();



        return view('admin.teacher.create', compact('staffs','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StaffRequest $request)
    {
        //
         //return $request->all(); //1st check success sending information
        //  $input =$request->all(); nother way
        $teachers= Subject::findOrFail($subject_id);
        $teachers = Staff::findOrFail($staff_id);

        $teachers->staff_id = $request->input('staff_id');
        $teachers->subject_id = $request->input('subject_id');


        $teachers->save();

        // $teachers=Staff;
        // $teacher->subjects()->sync($request->subjects, false);

        return redirect(route('teacher.index'))->with('response','successfully create Teacher subject Relationship');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

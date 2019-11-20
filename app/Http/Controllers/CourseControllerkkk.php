<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

use App\Http\Requests\CourseRequest;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //Course Details available here
          $courses=Course::all();
          return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        //
         //return $request->all(); //1st check success sending information
        //  $input =$request->all(); nother way

      $courses = new Course;

      $courses->course_id = $request->input('course_id');
      $courses->course_name = $request->input('course_name');
      $courses->course_fee  = $request->input('course_fee');
      $courses->duration  = $request->input('duration');
      $courses->admission_fee  = $request->input('admission_fee');

      $courses->save();

      return redirect(route('course.index'))->with('response','successfully added Course');

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
        $courses = Course::findOrFail($id);
        return view('courses.show', compact('courses'));
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
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
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
        //return $request->all(); success
        $course = Course::findOrFail($id);

        $input = $request->all();

        $course->update($input);

        return redirect(route('course.index'))->with('response','successfully Course updated');
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

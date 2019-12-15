<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //Subject Details available here
         $subjects=Subject::all();
         return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'id'=>'bail|required',
            'subject_name'=>'required',

        ]);

            $subjects = new Subject;
            $subjects->id = $request->input('id');
            $subjects->subject_name = $request->input('subject_name');
            $subjects->save();
            return redirect(route('subject.index'))->with('response','subject created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //

        $subject = Subject::findOrFail($subject->id);

        return view('subjects.show', compact('subject'));

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
        //dd($id);
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));

        
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
         $subject = Subject::findOrFail($id);
         $input = $request->all();
        
         $subject->update($input);

        return redirect(route('subject.index'))->with('response','Subject Updated Successfully! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //checking purpose passing in array Success
        //dd($subject);
        $subject = Subject::find($subject->id);
        $subject->delete();

        // redirect
        return redirect(route('subject.index'))->with('response','Successfully deleted the subject!');

    }
}

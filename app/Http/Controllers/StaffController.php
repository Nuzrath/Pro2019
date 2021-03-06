<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Staff;
use App\User;
use App\Role;
use App\Http\Requests\StaffRequest;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //staff Details available here
        $staffs=Staff::all();
        return view('staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles =Role::pluck ('name','id')->all();
		return view('staffs.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //vqlidation reference - https://laravel.com/docs/5.7/validation#introduction
    public function store(StaffRequest $request)
    {
        //
        $staffs = new Staff;

        $staffs->fname = $request->input('fname');
        $staffs->lname = $request->input('lname');
        $staffs->address = $request->input('address');
        $staffs->country = $request->input('country');
        $staffs->dob = $request->input('dob');
        $staffs->contact1 = $request->input('contact1');
        $staffs->contact2 = $request->input('contact2');
        $staffs->nic_no = $request->input('nic_no');

        $staffs->passport_no = $request->input('passport_no');
        $staffs->gender = $request->input('gender');
        $staffs->email = $request->input('email');

        $staffs->qualification = $request->input('qualification');
        $staffs->certificates_img = $request->input('certificates_img');
        $staffs->is_active = $request->input('is_active');
        $staffs->staff_pic = $request->input('staff_pic');
        $staffs->role_id = $request->input('role_id');

        $staffs->save();
        return redirect(route('staff.index'))->with('response','staff created successfully');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //

        $staff = Staff::findOrFail($staff->id);

        // $user = App\User::find(1);

        // foreach ($user->roles as $role) {
        //     echo $role->pivot->created_at;
        // }

        return view('staffs.show', compact('staff'));
        // $staff = Staff::where('id', $staff->id );



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
        $staff = Staff::findOrFail($id);
        $roles =Role::pluck ('name','id')->all();
        return view('staffs.edit', compact('staff','roles'));
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
        $staff = Staff::findOrFail($id);
        $input = $request->all();

        $staff->update($input);

        return redirect(route('staff.index'))->with('response','Staff Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
        //dd($staff);

        $staff = Staff::find($staff->id);
        $staff->delete();

        // redirect    
         
         return redirect(route('staff.index'))->with('response','Successfully deleted the subject!');

    }
}

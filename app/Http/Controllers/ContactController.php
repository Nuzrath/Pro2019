<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $contacts = Contact::all();
        return view('contacts.list',compact('contacts'));

	}

	 /* ===== Unit Test 1 - success =======
	public function addcontact(Request $request){
		return 'add contact pagesss';
	}

	=== Test 2 - is this pass input check - succuess ====
	public function addcontact(Request $request){

		return $request->input('name');

	}*/


	/*== === Test 3 - is this pass input check - succuess ====
	public function addcontact(Request $request){
		/*----
		=== bail === > laravel documentation,
		Sometimes you may wish to stop running validation rules on an attribute after the first validation failure. To do so, assign the bail rule to the attribute:

		$this->validate($request,[
		'name'=>'bail|required',
		'email'=>'nullable',
		'tel'=>'required|',
		'course'=>'nullable',
		'comment'=>'nullable',
		]);

		return "validation pass";
	}
	== output -----> validation pass	*/



    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */

    public function create()
    {
        return view('contacts.form');
    }
	public function store(Request $request){

		$this->validate($request,[
		'name'=>'bail|required',
		'email'=>'nullable',
		'contact_no'=>'required',
		'course'=>'nullable',
		'comment'=>'nullable',
		]);



		$contact=new Contact;
		$contact->name = $request->input('name'); //input() should be same as name of textbox
		$contact->email = $request->input('email');
		$contact->contact_no = $request->input('contact_no');
		$contact->course = $request->input('course');
		$contact->comment = $request->input('comment');
		$contact->save();
		return redirect('/contact')->with('response','Your Request Sent Successfully, Thank you!');
	}











    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}

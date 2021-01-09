<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $all_staff = Staff::latest()->get();
        return view('staff.index',[
            'staff' => $all_staff
        ]);
    }
    public function create(){
        return view('staff.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' =>'required',
            'email' =>'required | unique:staff',
            'cell' =>'required',
            'username' => 'required | unique:staff',
            'age' => 'required',
            'password' => 'required'

        ],[
            'name.required' => 'nam er ghore nam likhun',
            'email.required' => 'email er ghore email likhun',
            'email.unique' => 'ei email neya hoise',
             'cell.required' => 'cell er ghore cell likhun',
            'username.required' => 'username khali rakha jabe na',
            'username.unique' => 'ei username neya hoise',
            'age.required' => 'age er ghore age likhun',
            'password.required' => 'password er ghore password likhun'

        ]);

     Staff::create([
         'name'     => $request -> name,
         'email'    => $request -> email,
         'cell'     => $request -> cell,
         'username' => $request -> username,
         'age'      => $request -> age,
         'password' => password_hash($request->password,PASSWORD_DEFAULT)
     ]);

     return redirect()->back()->with('success', 'data insert successfully');


    }
    public function show($id){
        $staff_data = Staff::find($id);
        return view('staff.show',[
            'single_data' => $staff_data
        ]);
    }

    public function delete($id){
        $delete_data = Staff::find($id);
        $delete_data->delete();
        return redirect()->back()->with('success','staff deleted successful');
    }



}

<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){
       $stu = Student::all();
       return view('student.index',[
           'all_stu' => $stu
       ]);
   }

   public function create(){
       return view('student.create');
   }
   public function store(Request $request){
       $this->validate($request,[
           'name' => 'required',
           'email' => 'required | unique:students',
           'cell' => 'required',
           'username' => 'required | max:15 | min:5 | unique:students'
       ],[
           'name.required' => 'nam er ghore nam likhun',
           'email.required' => 'email er ghore email likhun',
           'cell.required' => 'mobile er ghore number likhun',
           'username.required' => 'username khali rakha jabe na',
           'username.unique' => 'onno kew username nia rakhse',
           'username.max' => 'uname 15 er beshi hobe na'
       ]);
       Student::create([
           'name' =>$request->name,
           'email' =>$request->email,
           'cell' =>$request->cell,
           'username' => $request ->username


       ]);
       return redirect()->back()->with('success', 'Student added successful');
   }

   public function show($id){
       $data = Student::find($id);
       return view('student.show',[
           'stu' => $data
           ]);
   }
   public function delete($id){
       $delete_data = Student::find($id);
       $delete_data -> delete();
       return redirect()->back()->with('success','student deleted successful');
   }



}

<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   public function index(){
       $teacher_data = Teacher::all();
       return view('teacher.index',[
           'teacher' => $teacher_data
       ]);
   }
   public function create(){
       return view('teacher.create');
   }
   public function store(Request $request){
       $this->validate($request,[
           'name'   => 'required',
           'email'  => 'required | unique:teachers',
           'cell'   => 'required',
           'username'   => 'required | unique:teachers',
           'age'    => 'required',
           'password' => 'required'
       ],[
           'name.required' => 'nam er ghor khali rakha jabe na',
           'email.required' => 'email er ghor khali rakha jabe na',
           'email.unique' => 'ei email onno kew nia nise',
           'cell.required' => 'cell ghor khali rakha jabe na',
           'username.required' => 'username khali rakha jabe na',
           'username.unique' => 'ei username onno kew nia nise',
           'age.required' => 'age er ghor khali rakha jabe na',
           'password.required' => 'password er ghor khali rakha jabe na'

       ]);
        Teacher::create([
           'name'      => $request->name,
            'email'    => $request ->email,
            'cell'     => $request ->cell,
            'username' => $request ->username,
            'age'      => $request->age,
            'password' => password_hash($request->password,PASSWORD_DEFAULT)
       ]);
            return redirect()->back()->with('success', 'Teacher added successful');
   }
   public function show($id){
       $tdata = Teacher::find($id);
       return view('teacher.show',[
           'show' => $tdata
       ]);
   }
   public function delete($id){
       $del_data = Teacher::find($id);
       $del_data -> delete();
       return redirect() ->back()->with('success','Teacher deleted successfully');
   }

}

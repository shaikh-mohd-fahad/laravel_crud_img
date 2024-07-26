<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    public function show(){
        $stu=Student::all();
        // dd($students);
        return view('home',['students'=>$stu]);
    }
    public function show_form(){
        
        return view('insert_student');
    }
    public function submit_form(Request $req){
        $student=new Student;
        $student->name=$req->name;
        $student->email=$req->email;
        $student->gender=$req->gender;
        $student->country=$req->country;
        $student->course=implode(',',$req->course);
        if($req->hasFile('img')){
            $img_name=time().".".$req->file('img')->getClientOriginalExtension();
            $req->file('img')->move('image',$img_name);
        }
        $student->image=$img_name;
        $student->save();
        return redirect('/')->with('status','Data Submitted Successfully');
    }
    public function del($id){
        // return "delte";
        $student=Student::find($id);
        $student->delete();
        return redirect('/')->with('status','Data Deleted Successfully');
    }
    public function show_edit_form($id){
        $student=Student::find($id);
        return view('edit_student',['student'=>$student]);
    }
    public function edit_form(Request $req,$id){
        $student= Student::find($id);
        $student->name=$req->name;
        $student->email=$req->email;
        $student->gender=$req->gender;
        $student->country=$req->country;
        
        $student->course=implode(',',$req->course);
        if($req->hasFile('img')){
            unlink(public_path("image/$student->image"));
            $img_name=time().".".$req->file('img')->getClientOriginalExtension();
            $req->file('img')->move('image',$img_name);
            $student->image=$img_name;
        }
        
        $student->save();
        return redirect('/')->with('status','Data Updated Successfully');
    }
}

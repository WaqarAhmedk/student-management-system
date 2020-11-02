<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequest;
use App\RegisterStudent;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{

    public function registerform()
     {
        return view('admin.registerstudent');
    }

    public function registerstudent(ValidateRequest $request)
    {
        RegisterStudent::create($request->all());
        return redirect(route('view.home'))->with('message' , 'Student Registered Successfully');

    }
    public function delete( RegisterStudent $id){
        $id->delete();
        return redirect(route('student.view'))->with('message', 'Student Deleted');

    }

    public function update( Request $request , RegisterStudent $id){
        $id->update([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'cnic'=>$request->cnic,
            'semester'=>$request->semester,
            'email'=>$request->email,



        ]);

        return redirect(route('student.view'))->with('message', 'updated');

    }
    public function searchform()
    {

        return view('admin.search');
    }
    public function search(Request $request , RegisterStudent $student)
    {


       $data= RegisterStudent::query()
            ->where('semester', 'LIKE', "%{8}%")
            ->get();

    }

}

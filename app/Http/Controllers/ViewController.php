<?php

namespace App\Http\Controllers;

use App\RegisterStudent;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function viewdata()
    {
       $data= RegisterStudent::get()->all();

        return view('admin.viewdata',compact('data'));
    }
    public function edit( RegisterStudent $id)
    {
        return view('admin.editstudent',compact('id'));
    }


}

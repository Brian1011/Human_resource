<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
    //save details
    public function store(Request $request){
        //validate the data
        $request->validate([
            'dep_name' => 'required|string',
            'dep_head'=>'required|string',
        ]);

        //check if id exists
        if(request('dep_id')!==null){
            //then update data
            $dep = department::find(request('dep_id'));
            $dep->department_name = request('dep_name');
            $dep->department_head = request('dep_head');

            $dep->save();
            return redirect('/home')->with('message','Department Changes have been saved sucessfully');
        }else{
            //store new data
            $dep = new department();
            $dep->department_name = request('dep_name');
            $dep->department_head = request('dep_head');

            $dep->save();
            return redirect('/home')->with('message','Department has been saved sucessfully');
        }

    }

    //view a particular department
    public function findDepartment($id){
        $department = department::find($id);
        //return $department;
        return view('add_department',['department'=>$department]);
    }
}

<?php

namespace App\Http\Controllers;

use App\department;
use App\employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //login
    public function login(Request $request){
        //no need for validation
        $user = new User();

        //check if the email address exists
        $email = $request->input('email');
        $user_pass = $request->input('password');
        $user['email'] = $email;

        if($user = User::where('email','=',$email)->first()){
            /*
             *  email exists
             *  Go to database and select password
             */

            if(Hash::check($user_pass,$user->password)){
                //$user['authorize'] = "authorized";

                //store a piece of info after login
                session(['user_id'=>$user->id]);
                session(['user_name'=>$user->name]);
                session(['user_email'=>$user->email]);
               // return view('home');
                return redirect('/home');
            }else{
                //$user['authorize'] = "Not Authorized";
                return back()->with('message','Invalid Email or password');
            }

        }else{

            return back()->with('message','Invalid Email or password');
        }

    }

    //list of employees from certain department
    public function departmentEmployees(Request $request, $id){
        $dep_employees = employee::where('department_id','=',$id)->get();

        //get the department name
        foreach ($dep_employees as $dep){
            $dep_id = department::find($dep->department_id);
            $dep['department_name']=$dep_id->department_name;
        }

        return view('list_of_employees',['employees'=>$dep_employees]);
    }
}

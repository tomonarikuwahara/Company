<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class CompanyController extends Controller
{
    //
    public function login(Request $request){
    	$this->validate($request,[
    		'employee_no'=>'required|numeric',
    		'password'=>'required'
    	]);
        if(Auth::attempt(['employee_no' => $request->employee_no, 'password' => $request->password],true)){
            $user=Auth::user();
            if(Auth::user()->role=='admin'){
               return view('company.admin');
            }elseif (Auth::user()->role=='sub-admin') {
                return view('company.sub-admin');
            }else{
                return view('company.employee');
            }            
        }else {
            $errors = ['employee_no' => trans('auth.failed')];
            return back()->withInput($request->only('employee_no', 'remember'))
                         ->withErrors($errors);
        }
    }
}

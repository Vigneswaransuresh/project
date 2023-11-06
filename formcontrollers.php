<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class formcontroller extends Controller
{
   
  public function display(){
        return view("form");
    }
    public function insert(request $request){
        $name = $request->input('name');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $language = $request->input('language');
        $country = $request->input('country');
        $state = $request->input('state');
        $city = $request->input('city');
        $pincode = $request->input('pincode');
        $password = $request->input('password');

        DB::insert("insert into app(name,dob,gender,age,email,phone,address,language,country,state,city,pincode,password)values(?,?,?,?,?,?,?,?,?,?,?,?,?)",[$name,$dob,$gender,$age,$email,$phone,$address,$language,$country,$state,$city,$pincode,$password]);
        return 'record inserted successfully! <a href="/"><br>Click here to go back</a>';
}
public function form(){
    $details = DB::select("select*from app");
    return view('form2',['details'=>$details]);
}
}

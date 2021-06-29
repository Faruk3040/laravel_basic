<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
   // public function index(){
      //  echo $user;
    //    echo "Come from Controller";
  //  }
/*
  public function loadview(){
    // return view('user',['user'=>['faruk','anil','emon']]);
    $data = ['anil','faruk','emon','navil','saiful'];
    //return view('users',['users'=>'Peter']);
    return view('users',['users' => $data]);
  }
*/
 // public function getData(Request $request){
 //     $request->validate([
 //       'username' => 'required',
//        'userpassword' => 'required|min:5',
 //     ]);
 //     return $request->input();

 // }

 //function index(){
  //   return "API will be here:";
  //    $collection = Http::get("https://reqres.in/api/users?page=1");
   //   return view('users' ,['collection'=>$collection['data']]);
 //}

 function testRequest(Request $request)
 {
    return $request->input();
 }

}

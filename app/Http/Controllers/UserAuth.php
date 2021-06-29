<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $request)
    {
       // return $request->input();
       $data = $request->input();
       $request->session()->put('user',$data['user']);
        return redirect('profile');
    }
}
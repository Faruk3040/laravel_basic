<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    function add(Request $request)
    {
      //  return $request->input();
      $data = $request->input('user');
      $request->session()->flash('user',$data);
      return redirect('add');
    }
}
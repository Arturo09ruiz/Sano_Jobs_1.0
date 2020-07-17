<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{


    public function index()
    {
        $role_id = Auth::user()->role_id;
        if($role_id==1){

        }else{
            return redirect()->route('index');
        }




        return view('admin.index.app');
    }
}

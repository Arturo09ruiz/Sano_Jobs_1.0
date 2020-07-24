<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Vacant;


class AdminController extends Controller
{


    public function index()
    {
        $role_id = Auth::user()->role_id;
        if($role_id==1){

        }else{
            return redirect()->route('index');
        }



        // $enero = Vacant::where('user_id', auth()->user()->id);
        return view('admin.index.app');
    }
}

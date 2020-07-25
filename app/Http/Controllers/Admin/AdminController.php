<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Vacant;
use App\User;
use App\Team;

class AdminController extends Controller
{


    public function index()
    {
        $role_id = Auth::user()->role_id;
        if($role_id==1){

        }else{
            return redirect()->route('index');
        }

        $enero = Vacant::where('created_at', 'LIKE', "%2020-01%")->get()->count();
        $febrero = Vacant::where('created_at', 'LIKE', "%2020-02%")->get()->count();
        $marzo = Vacant::where('created_at', 'LIKE', "%2020-03%")->get()->count();
        $abril = Vacant::where('created_at', 'LIKE', "%2020-04%")->get()->count();
        $mayo = Vacant::where('created_at', 'LIKE', "%2020-05%")->get()->count();
        $junio = Vacant::where('created_at', 'LIKE', "%2020-06%")->get()->count();
        $julio = Vacant::where('created_at', 'LIKE', "%2020-07%")->get()->count();
        $agosto = Vacant::where('created_at', 'LIKE', "%2020-08%")->get()->count();
        $septiembre = Vacant::where('created_at', 'LIKE', "%2020-09%")->get()->count();
        $octubre = Vacant::where('created_at', 'LIKE', "%2020-10%")->get()->count();
        $noviembre = Vacant::where('created_at', 'LIKE', "%2020-11%")->get()->count();
        $diciembre = Vacant::where('created_at', 'LIKE', "%2020-12%")->get()->count();

        $vacants_number = Vacant::all()->count();
        $users_number = User::all()->count();
        $teams_number = Team::all()->count();

        return view('admin.index.app', compact('enero', 'febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre','vacants_number','users_number','teams_number'));
    }
}

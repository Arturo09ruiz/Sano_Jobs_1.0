<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Auth;
use App\Vacant;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $role_id = Auth::user()->role_id;
        if($role_id==2){

        }else{
            return redirect()->route('index');
        }

        $enero = Vacant::where('created_at', 'LIKE', "%2020-01%")->where('user_id', Auth::user()->id)->get()->count();
        $febrero = Vacant::where('created_at', 'LIKE', "%2020-02%")->where('user_id', Auth::user()->id)->get()->count();
        $marzo = Vacant::where('created_at', 'LIKE', "%2020-03%")->where('user_id', Auth::user()->id)->get()->count();
        $abril = Vacant::where('created_at', 'LIKE', "%2020-04%")->where('user_id', Auth::user()->id)->get()->count();
        $mayo = Vacant::where('created_at', 'LIKE', "%2020-05%")->where('user_id', Auth::user()->id)->get()->count();
        $junio = Vacant::where('created_at', 'LIKE', "%2020-06%")->where('user_id', Auth::user()->id)->get()->count();
        $julio = Vacant::where('created_at', 'LIKE', "%2020-07%")->where('user_id', Auth::user()->id)->get()->count();
        $agosto = Vacant::where('created_at', 'LIKE', "%2020-08%")->where('user_id', Auth::user()->id)->get()->count();
        $septiembre = Vacant::where('created_at', 'LIKE', "%2020-09%")->where('user_id', Auth::user()->id)->get()->count();
        $octubre = Vacant::where('created_at', 'LIKE', "%2020-10%")->where('user_id', Auth::user()->id)->get()->count();
        $noviembre = Vacant::where('created_at', 'LIKE', "%2020-11%")->where('user_id', Auth::user()->id)->get()->count();
        $diciembre = Vacant::where('created_at', 'LIKE', "%2020-12%")->where('user_id', Auth::user()->id)->get()->count();

        // $vacants_number = Vacant::all()->count();
        // $users_number = User::all()->count();
        // $teams_number = Team::all()->count();
        echo $enero;
        echo $febrero;
        echo $marzo;
        echo $abril;
        echo $mayo;
        echo $junio;
        echo $julio;
        echo $agosto;
        echo $septiembre;
        echo $octubre;
        echo $noviembre;
        echo $diciembre;
        dd(Auth::user()->id);


        // return view('admin.index.app', compact('enero', 'febrero', 'marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre','vacants_number','users_number','teams_number'));
    }
}

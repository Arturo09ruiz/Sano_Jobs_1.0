<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Council;
use App\Country;


class CouncilsController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        $councils = Council::all();
        return view('admin.index.councils.index', compact('countries','councils'));
    }


    public function store(Request $request)
    {
        $council = Council::create($request->all());
        return back();
    }

    public function destroy($id)
    {
        $council = Council::find($id)->delete();
        return back();
    }

    public function getCouncilsByCountryId(Request $request){

        $userData = Council::where('country_id', $request->id)->get();
        return json_encode(array('data'=>$userData));
    }
}

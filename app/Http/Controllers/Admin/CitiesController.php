<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\City;
use App\Council;
use App\Country;


class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $cities = City::all();
        return view('admin.index.cities.index', compact('cities', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->country_id);
        // $city = City::create($request->all());
        $city = new City;
        $city->name  =  $request->name;
        $city->country_id =  $request->country_id;
        $city->council_id  =  $request->council_id;

        $city->save();
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = City::find($id)->delete();
        return back();
    }

    public function getCitiesByCouncilId(Request $request){

        $userData = City::where('council_id', $request->id)->get();
        return json_encode(array('data'=>$userData));
    }
}

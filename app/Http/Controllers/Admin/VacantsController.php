<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Vacant;
use App\Category;
use App\Team;
use App\Country;
use Auth;
use App\Http\Requests\VacantStoreRequest;


class VacantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        $categories = Category::all();
        $teams = Team::all();
        $vacants = Vacant::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(10);
        return view('admin.index.vacants.index', compact('vacants', 'categories', 'teams', 'countries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VacantStoreRequest $request)
    {

        $vacant = new Vacant;

        $vacant->name  =  $request->name;
        $vacant->description  =  $request->description;
        $vacant->requirements  =  $request->requirements;
        $vacant->business  =  $request->business;
        $vacant->email  =  $request->email;
        $vacant->telefono  =  $request->telefono;
        $vacant->deadline  =  $request->deadline;
        $vacant->user_id  =  Auth::user()->id;
        $vacant->country_id =  $request->country_id;
        $vacant->conuncil_id   =  $request->council_id;
        $vacant->city_id  =  $request->city_id;
        $vacant->team_id  =  $request->team_id;
        $vacant->category_id   =  $request->category_id;


        $vacant->save();

        return back()->with('info', 'Guardado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function status($id)
    {
        $date = ('DEAD');
        $vacant = Vacant::find($id);
        $vacant->status = $date;
        $vacant->save();
        return back()->with('info', 'Status Cambiado Correctamente');;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacant = Vacant::find($id)->delete();
        return back()->with('danger', 'Eliminado Correctamente');
    }
}

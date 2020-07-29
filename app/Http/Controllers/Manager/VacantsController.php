<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VacantsManagerStoreRequest;
use App\Vacant;
use App\Category;
use App\City;
use Auth;



class VacantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::where('council_id', Auth::user()->conuncil_id)->get();
        $categories = Category::all();
        $vacants = Vacant::orderBy('id', 'desc')->where('status', 'PUBLISHED')->where('user_id', Auth::user()->id)->paginate(10);
        return view('manager.index.vacants.index', compact('vacants', 'categories','cities'));

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
    public function store(VacantsManagerStoreRequest $request)
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
        $vacant->country_id =  Auth::user()->country_id;
        $vacant->conuncil_id   =  Auth::user()->conuncil_id;
        $vacant->city_id  =  $request->city_id;
        $vacant->team_id  =  Auth::user()->team_id;
        $vacant->category_id   =  $request->category_id;


        $vacant->save();

        return redirect()->route('vacants-manager.index')->with('info', 'Guardado Correctamente');
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
    public function update(Request $request, $id)
    {
        //
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
        return redirect()->route('vacants-manager.index')->with('danger', 'Eliminado Correctamente');
    }
}

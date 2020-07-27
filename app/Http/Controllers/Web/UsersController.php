<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use App\User;
class UsersController extends Controller
{


    public function register(UserRegisterRequest $request)
    {

        $pass = $request->password;
        $pass_c = $request->password_c;

        if($pass == $pass_c){
        }else{
            return redirect()->route('index')->with('danger', 'Las Contraseñas No Coinciden');
        };

        $user = new User;

        $user->name  =  $request->name;
        $user->email   =  $request->email;
        $user->password  = Hash::make($request->password);
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

        return redirect()->route('vacants.index')->with('info', 'Guardado Correctamente');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
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
        //
    }
}

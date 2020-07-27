<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;
use Illuminate\Support\Facades\Hash;

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
        $user->country_id   =  $request->country_id;
        $user->conuncil_id   =  $request->council_id;
        $user->city_id   =  $request->city_id ;
        $user->role_id   =  5;

        $user->save();

        return redirect()->route('index')->with('info', 'Proceso de registro completado, Iniciar sesión');

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

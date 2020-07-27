<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use App\Country;
use App\Team;
use App\Role;
use App\Http\Requests\AdminUsersRegisterRequest;




class UsersController extends Controller
{


    public function index()
    {
        $users = User::all();
        $teams = Team::all();
        $roles = Role::all();
        $countries = Country::all();
        return view('admin.index.users.index', compact('users', 'countries', 'teams', 'roles'));
    }

    public function reset(Request $request)
    {

        $users = User::where('email', $request->email)->get();
        $teams = Team::all();
        $roles = Role::all();
        $countries = Country::all();
        return view('admin.index.users.index', compact('users', 'countries', 'teams', 'roles'));

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
    public function store(AdminUsersRegisterRequest $request)
    {
        $user = new User;

        $user->name  =  $request->name;
        $user->email  =  $request->email;
        $user->password  = Hash::make($request->password);
        $user->country_id =  $request->country_id;
        $user->conuncil_id   =  $request->council_id;
        $user->city_id  =  $request->city_id;
        $user->role_id  =  $request->role_id;
        $user->team_id  =  $request->team_id;

        $user->save();

        return back();
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
        $user = User::find($id);

        $user->password  = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id)->delete();
        return redirect()->route('users.index');
    }
}

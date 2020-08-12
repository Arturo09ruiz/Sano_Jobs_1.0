<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Test;
use App\Vacant;
use App\Category;
use App\Country;
use Auth;
use Mail;
Use App\User;



class VacantsController extends Controller
{
    public function index($keyword, $country, $council, $city, $deadline, $created, $category)
    {

        $email = Auth::user()->email;

        $user = User::where('id', Auth::user()->id)->get();

        Mail::to($email)->send(new Test($user));



        // if($council == 'w'){
        //     $vacants = Vacant::where('country_id', $country)
        //     ->where('name', 'LIKE', "%$keyword%")
        //     ->paginate(4);
        // }else{
        //     $vacants = Vacant::where('country_id', $country)
        //     ->where('conuncil_id', $council)
        //     ->where('city_id', $city)
        //     ->where('category_id', $category)
        //     ->where('deadline', $deadline)
        //     ->where('created_at', 'LIKE', "%$created%")
        //     ->where('name', 'LIKE', "%$keyword%")
        //     ->paginate(4);
        // }


        // $categories = Category::all();
        // $countries = Country::all();

        // return view('web.vacants.index', compact('vacants' ,'categories', 'countries'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

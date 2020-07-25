<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
class PageController extends Controller
{
    public function index(){
        $countries = Country::all();

        return view('web.index.app', compact('countries'));
    }
}

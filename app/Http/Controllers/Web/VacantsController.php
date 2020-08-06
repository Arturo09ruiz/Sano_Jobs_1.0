<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacant;
use App\Category;

class VacantsController extends Controller
{
    public function index($keyword, $country, $council, $city, $deadline, $created, $category)
    {

        if($council == 'w'){
            $vacants = Vacant::where('country_id', $country)
            ->where('name', 'LIKE', "%$keyword%")
            ->paginate(4);
        }else{
            $vacants == Vacantt::All()->paginate(4);
        }

        $categories = Category::all();


        return view('web.vacants.index', compact('vacants' ,'categories'));
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

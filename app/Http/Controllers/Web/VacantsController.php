<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vacant;

class VacantsController extends Controller
{
    public function index($keyword, $country)
    {

        // if(empty($request->all())){

        //     $vacants = Vacant::paginate(4);
        //     return view('web.vacants.index', compact('vacants'));
        // }

        // $country = $request->country_id;
        // $keyword = $request->keyword;

        $vacants = Vacant::where('country_id', $country)
            ->where('name', 'LIKE', "%$keyword%")
            ->paginate(4);

        return view('web.vacants.index', compact('vacants'));
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

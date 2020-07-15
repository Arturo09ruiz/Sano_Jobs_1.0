<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // imprimir maravilla
        // dd($tags);
        return view('admin.index.app');
    }
}

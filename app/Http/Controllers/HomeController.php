<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        return view('search', ['query' => $query]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    function show(Request $request){
        $data = DB::table('papers')->where('paper_id', $request->id)->get();
        return view('show')->with('data', $data[0]);
    }
    function index(Request $request){
        if(!empty($request)){
            return $this -> show($request);
        }
        else{
            return view("show")->with("data", null);
        }
    }
}

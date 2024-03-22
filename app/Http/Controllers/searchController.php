<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');

        $results = [
            (object) [
                'title' => 'Gymnasiearbete 1',
                'description' => 'Detta är ett gymnasiearbete som handlar om något'
            ],
            (object) [
                'title' => 'Gymnasiearbete 2',
                'description' => 'Detta är ett gymnasiearbete som handlar om något annat'
            ],
            (object) [
                'title' => 'Gymnasiearbete 3',
                'description' => 'Detta är ett gymnasiearbete som handlar om något helt annat'
            ]
        ];

        return view("search")->with('results', $results);
    }
}

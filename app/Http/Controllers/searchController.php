<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class searchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('search')) {
            if(empty($request->input("search"))){
                return redirect()->route("search");   
            }
            $results = [
                (object)[
                    "id" => 1,
                    "date" => "2021-05-12",
                    "author" => "John Doe",
                    "class" => "TE18D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något"
                ],
                (object)[
                    "id" => 2,
                    "date" => "2021-05-12",
                    "author" => "Jane Doe",
                    "class" => "TE19D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något annat"
                ],
                (object)[
                    "id" => 1,
                    "date" => "2021-05-12",
                    "author" => "John Doe",
                    "class" => "TE18D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något"
                ],
                (object)[
                    "id" => 2,
                    "date" => "2021-05-12",
                    "author" => "Jane Doe",
                    "class" => "TE19D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något annat"
                ],
                (object)[
                    "id" => 1,
                    "date" => "2021-05-12",
                    "author" => "John Doe",
                    "class" => "TE18D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något"
                ],
                (object)[
                    "id" => 2,
                    "date" => "2021-05-12",
                    "author" => "Jane Doe",
                    "class" => "TE19D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något annat"
                ],
                (object)[
                    "id" => 3,
                    "date" => "2021-05-12",
                    "author" => "John Doe",
                    "class" => "TE18D",
                    "title" => $request->input('search'),
                    "description" => "Detta är ett gymnasiearbete som handlar om något helt annat"
                ]
            ];
        }
        else{
            $results = [
                (object) [
                    "id" => 1,
                    'date' => '2021-05-12',
                    "author" => "John Doe",
                    'class' => 'TE18D',
                    'title' => 'Gymnasiearbete 1',
                    'description' => 'Detta är ett gymnasiearbete som handlar om något'
                ],
                (object) [
                    "id" => 2,
                    'date' => '2021-05-12',
                    "author" => "Jane Doe",
                    'class' => 'TE19D',
                    'title' => 'Gymnasiearbete 2',
                    'description' => 'Detta är ett gymnasiearbete som handlar om något annat'
                ],
                (object) [
                    "id" => 3,
                    'date' => '2021-05-12',
                    "author" => "John Doe",
                    'class' => 'TE18D',
                    'title' => 'Gymnasiearbete 3',
                    'description' => 'Detta är ett gymnasiearbete som handlar om något helt annat'
                ]
            ];
        }




        return view("search")->with('results', $results)->with('search', $request->input('search'))->with('searchRes', count($results));
    }
}

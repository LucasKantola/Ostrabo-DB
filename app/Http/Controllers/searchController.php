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
                    "subtitle" => "Subtitle 1", // Add subtitle property
                    "abstract" => "Detta är ett gymnasiearbete som handlar om något" . str_repeat(" Detta är ett gymnasiearbete som handlar om något", 3)
                ],
                (object)[
                    "id" => 2,
                    "date" => "2021-05-12",
                    "author" => "Jane Doe",
                    "class" => "TE19D",
                    "title" => $request->input('search'),
                    "subtitle" => "Subtitle 2", // Add subtitle property
                    "abstract" => "Detta är ett gymnasiearbete som handlar om något annat" . str_repeat(" Detta är ett gymnasiearbete som handlar om något annat", 3)
                ],
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
                    'subtitle' => 'Subtitle 1', // Add subtitle property
                    'abstract' => 'Detta är ett gymnasiearbete som handlar om något' . str_repeat(" Detta är ett gymnasiearbete som handlar om något", 3)
                ],
                (object) [
                    "id" => 2,
                    'date' => '2021-05-12',
                    "author" => "Jane Doe",
                    'class' => 'TE19D',
                    'title' => 'Gymnasiearbete 2',
                    'subtitle' => 'Subtitle 2', // Add subtitle property
                    'abstract' => 'Detta är ett gymnasiearbete som handlar om något annat' . str_repeat(" Detta är ett gymnasiearbete som handlar om något annat", 3)
                ],
                // Add subtitle property to other items in the array
            ];
        }

        return view("search")->with('results', $results)->with('search', $request->input('search'))->with('searchRes', count($results));
    }
}

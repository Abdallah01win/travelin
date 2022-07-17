<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class SearchFormController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'destination' => 'required|string',
            'departure' => 'required',
            'returnDate' => '',
            'people' => 'required',
        ]);

        $search = new Search;
        $input = [
            'destination' =>  $request->destination,
            'departure' => $request->departure,
            'returnDate' => $request->returnDate,
            'people' => $request->people,
        ];
        $search->destination = $input['destination'];
        $search->departure = $input['departure'];
        $search->returnDate = $input['returnDate'];
        $search->people = $input['people'];
        $search->save();

        return response()->json([
            "status" => true,
            "data" => $input
        ], 200);
    }
};

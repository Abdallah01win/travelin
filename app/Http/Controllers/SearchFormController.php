<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
            'destination' =>  strtoupper($request->destination),
            'departure' => $request->departure,
            'returnDate' => $request->returnDate,
            'people' => $request->people,
        ];
        
        // capitalize city name and get first 3 letters
        $cityInitials = substr($input['destination'], 0, 3 );
        // make an API call and save the data to a varibale
        $citiesInfo = Http::withToken('HtPqKrvBL7Fs22xjmDUUu8fV5zbr')->get('https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY&keyword=' . $cityInitials .'&page%5Blimit%5D=10&page%5Boffset%5D=0&sort=analytics.travelers.score&view=FULL')["data"];
        // fillter the data to get the exact city the user search for
        // get the IATA code from that city and save it to the db




        $search->destination = $citiesInfo[0]["detailedName"];
        $search->departure = $input['departure'];
        //$search->returnDate = $input['returnDate'];
        //$search->people = $input['people'];
        $search->save();
        return response()->json([
            "status" => true,
            "data" => $citiesInfo
        ], 200);
        
        /*return redirect()->back()->with('success_message','any message you want')*/
    }
};

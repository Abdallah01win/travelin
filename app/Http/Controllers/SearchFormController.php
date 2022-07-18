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
        $cityInitials = substr($input['destination'], 0, 3);
        // make an API call and save the data to a varibale
        $citiesInfo = Http::withToken('fCnnwkJe0hTUSAED09GpgP4WDqrP')->get('https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY&keyword=' . $cityInitials . '&page%5Blimit%5D=250&page%5Boffset%5D=0&sort=analytics.travelers.score&view=FULL');
        // fillter the data to get the exact city the user search for
        function getCityCode($citiesInfo, $input)
        {
            $data =  $citiesInfo["data"];
            $responseArray = [];
            foreach ($data as $value) {
                if ($value["name"] === $input["destination"]) {
                    array_push($responseArray, $value);
                }
            }
            return $responseArray;
        };

        // loop over the array and creat an array of all the cities that match the name the user interned
        $cityCode = getCityCode($citiesInfo, $input);
        // check if that array count is more than 1
        if (count($cityCode) > 1) {
            // display a popup to the user where they can choose which city they ment
            // on click for that city triggers the http:: client redirect to the dashboared with the data for that city in it's body
            return response()->json([
                "status" => true,
                "hasMany" => true,
                "data" => count($cityCode)
            ], 200);
        } else {
            $search->destination = $cityCode[0]["detailedName"];
            $search->departure = $input['departure'];
            //$search->returnDate = $input['returnDate'];
            //$search->people = $input['people'];
            $search->save();
            return response()->json([
                "status" => true,
                "hasMany" => false,
                "data" => count($cityCode),
            ], 200);
        }

        // get the IATA code from that city and save it to the db

        //use Http::->get to redirect to the dashboard and pass it wahatever data in the body of the request
    }
};

<?php

namespace App\Http\Controllers;

use App\Models\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class SearchFormController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'departureLocation' => 'required|string',
            'destination' => 'required|string',
            'departureDate' => 'required',
            'returnDate' => '',
            'people' => 'required|integer',
        ]);

        $search = new Search;
        $input = [
            'departureLocation' =>  strtoupper($request->departureLocation),
            'destination' =>  strtoupper($request->destination),
            'departureDate' => $request->departureDate,
            'people' => $request->people,
        ];

        function getInitials($str)
        {
            return substr($str, 0, 3);
        };

        function getcityInfo($cityInitials)
        {
            return  Http::withToken('ZF67rL4YFGTTSKTQfsZCeX8AMQpk')->get('https://test.api.amadeus.com/v1/reference-data/locations?subType=CITY&keyword=' . $cityInitials . '&page%5Blimit%5D=250&page%5Boffset%5D=0&sort=analytics.travelers.score&view=LIGHT');
        };

        function getCityCode($citiesInfo, $str)
        {
            $data =  $citiesInfo["data"];
            $responseArray = [];
            foreach ($data as $value) {
                if ($value["name"] === $str) {
                    array_push($responseArray, $value);
                }
            }
            return $responseArray;
        };

        $departureInitails = getInitials(($input["departureLocation"]));
        $departureInfo = getcityInfo($departureInitails);
        $departureCode = getCityCode($departureInfo, $input["departureLocation"]);

        $destinationInitials = getInitials(($input["destination"]));
        $destinationInfo = getcityInfo($destinationInitials);
        $destinationCode = getCityCode($destinationInfo, $input["destination"]);

        $search->userId = Auth::id();
        $search->departureLocation = json_encode($departureCode) ;
        $search->destination = json_encode($destinationCode);
        $search->departureCount = count($departureCode);
        $search->destinationCount = count($destinationCode);
        $search->departureDate = $input['departureDate'];
        $search->returnDate =  '' /*$input['returnDate']*/;
        $search->people = $input['people'];
        $search->save();

        return response()->json([
            "status" => true,
        ], 200);

    }
};

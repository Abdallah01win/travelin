<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchFormController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'destination' => 'required|string',
            'departure' => 'required',
            'returnDate' => '',
            'people' => 'required',
        ]);

        /*
          Add mail functionality here.
        */
        return response()->json(null, 200);
        redirect('/dashboard');
    }
};

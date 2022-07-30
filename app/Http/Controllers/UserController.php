<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class UserController extends Controller
{
    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'adress' => 'required|string',
        ]);
        $input = [
            'name' =>  $request->name,
            'adress' =>  $request->adress,

        ];
        DB::table('users')
            ->where('id', Auth::id())
            ->update(['name' => $input['name'],
        'adress' => $input['adress']]);
        return response()->json([
            "status" => true,
        ], 200);
        //return inertia()->render('Profile');
    }
}

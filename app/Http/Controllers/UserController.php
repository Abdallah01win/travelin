<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'adress' => 'required',
            'password' => Rules\Password::defaults(),
        ]);
        $input = [
            'name' =>  $request->name,
            'adress' =>  $request->adress,
            'password' =>  $request->password,

        ];
        DB::table('users')
            ->where('id', Auth::id())
            ->update([
                'name' => $input['name'],
                'adress' => $input['adress'],
                'password' => Hash::make($input['password'])
            ]);
        return response()->json([
            "status" => true,
        ], 200);
    }

    public function delete(){
        DB::table('users')
        ->where('id', Auth::id())
        ->delete();

        return Inertia::render('Home');
    }
}

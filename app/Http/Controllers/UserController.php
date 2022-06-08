<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        //$user = User::get()->where('id', Auth::id());
        return inertia(component: 'Profile', /*compact(var_name: "user")*/);
        }
}

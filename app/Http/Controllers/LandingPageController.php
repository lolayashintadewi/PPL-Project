<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LandingPageController extends Controller
{
    public function index() {
        $users = User::all();

       // dd($users);

        return view('landingPage', [
            'users' => $users
        ]);

    }
}

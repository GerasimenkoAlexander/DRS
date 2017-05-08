<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct() {}

    public function signIn(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');
    }
}

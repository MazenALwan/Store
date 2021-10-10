<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser() {
        $users = User::get();
        return view('Profile', ['users' => $users]);
    }
}

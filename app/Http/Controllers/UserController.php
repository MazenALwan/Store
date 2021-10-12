<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getUser() {
        $users = User::get();
        return view('Profile', ['users' => $users]);
    }
}
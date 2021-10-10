<?php

namespace App\Http\Controllers;
use app\models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfilePage(){
        $users = user::get();
        return view('Profile', ['users' => $users]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use app\models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfilePage(){
        $users = user::get();
        return view('Profile', ['users' => $users]);
    }

    public function updateCredentials(Request $request)
    {   

        if(!empty(request()->input('name')) && request()->input('name') !== Auth::user()->name) {
            $this->validate($request, [
                'name' => 'min:2|unique:users',
            ]);
        }

        if(!empty(request()->input('email')) && request()->input('email') !== Auth::user()->email) {
            $this->validate($request, [
                'email' => 'unique:users',
            ]);
        }
    
        $user = User::findOrFail(Auth::user()->id);
        $user->name = request()->input('name');
        $user->email = request()->input('email');
        $user->save();
        
    
        return redirect()->route("profile");
    }
}

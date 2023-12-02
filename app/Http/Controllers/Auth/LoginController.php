<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    // protected function redirectTo(){
    //     if (Auth::user()->user_type == 1) {
    //         return 'dashboard';
    //     }
    //     elseif(Auth::user()->user_type == 2) {
    //         return 'user-home';
    //     }
    // }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('user.dashboard');
    }

    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

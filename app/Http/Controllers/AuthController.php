<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin'],
            'photo' => ['required','mimes:png,jpg,jpeg','image','max:2048']
        ]);

        $fileName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path('public/photos/users'), $fileName);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'photo' => $fileName
            
            
        ]);
        Auth::login($user);
        if ($user->role === 'admin') {
            return redirect('/dashboard-admin');
        }

        return redirect('/dashboard-user');

        // return redirect('/dashboard')->with('success', 'Vous etes connecté !');;
        
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification réussie
            $user = Auth::user();

            // Ajoutez ici la condition en fonction du rôle
            if ($user->role === 'admin') {
                return redirect('/dashboard-admin');
            } else if ($user->role === 'user'){
                return redirect('/dashboard-user');
            }
        }

        // L'authentification a échoué
        return redirect()->back()->withErrors(['email' => 'Les informations d\'identification sont incorrectes.']);

        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
        //     return redirect('/dashboard');
        // }

        // throw ValidationException::withMessages([
        //     'email' => [trans('auth.failed')],
        // ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}

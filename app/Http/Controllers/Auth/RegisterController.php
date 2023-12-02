<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    // use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'in:user,admin'],
            'photo' => ['required','mimes:png,jpg,jpeg','image','max:2048']
        ]);
    }

    protected function store(Request $request)
    {
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
        return redirect('/dashboard')->with('success', 'Vous etes connecté !');;
        
       
    }

    public function index(){
        return view('auth.register');
    }
}

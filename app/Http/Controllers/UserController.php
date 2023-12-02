<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        
        return view('admin.user.index', compact('users'));
    }

    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('admin.user.show', compact('users'));
    }


    public function create()
    {
        $users = User::all();
        return view('admin.user.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'photo' => ['required','mimes:png,jpg,jpeg','image','max:2048']
            
        ]);
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path('public/photos/users'), $fileName);
        $password ='12345678';
        User::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'photo' => $fileName
        ]);

        return redirect()->route('user')->with('success', 'Véhicule ajoutée avec succès.');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('admin.user.edit', compact('users'));

    }

    public function edituser($id)
    {
        return view('user.edit');
    }


    public function update(Request $request, $id)
    {
        
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path('public/photos/users'), $fileName);


        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $fileName
        ]);

        return redirect('/user')->with('success', 'Modification effectuée avec succès !');
        
    }   
    public function updateuser(Request $request, $id)
    {
        
        $fileName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path('public/photos/users'), $fileName);


        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'photo' => $fileName
        ]);

        return redirect('/dashboard-user')->with('success', 'Modification effectuée avec succès !');
        
    }   


    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/user')->with('success', "L'utilisateeur a bien été supprimé !");
    
    }


}

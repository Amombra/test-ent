<?php

namespace App\Http\Controllers;

use App\Models\FamilyMembers;
use App\Models\User;
use Illuminate\Http\Request;

class FamilyMemberController extends Controller
{
    public function index()
    {
        $family_members = FamilyMembers::all();
        $users = User::all();
        return view('admin.family_member.index', compact('family_members', 'users'));
    }


    public function show($id)
    {
        $family_members = FamilyMembers::findOrFail($id);

        return view('admin.family_member.show', compact('family_members'));
    }

    public function create()
    {
        $family_members = FamilyMembers::all();
        $users = User::all();
        return view('admin.family_member.create', compact('family_members', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
        ]);

        FamilyMembers::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('membre')->with('success', 'Véhicule ajoutée avec succès.');
    }

    public function edit($id)
    {
        $family_members = FamilyMembers::findOrFail($id);
        $users = User::all();
        return view('admin.family_member.edit', compact('family_members', 'users'));
    }

    public function update(Request $request, $id)
    {
        // Validez les données du formulaire ici
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
        ]);

        $family_member = FamilyMembers::findOrFail($id);
        $family_member->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'user_id' => $request->input('user_id')
        ]);

        return redirect()->route('membre')->with('success', 'Voiture mise à jour avec succès.');
    }

    public function destroy($id)
    {
        FamilyMembers::findOrFail($id)->delete();

        return redirect()->route('membre')->with('success', 'Voiture supprimée avec succès.');
    }

}

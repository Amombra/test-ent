<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\FamilyMembers;
use App\Models\AssignedVehicules;
use Illuminate\Support\Facades\DB;

class AssignedVehiculeController extends Controller
{
    public function index()
    {
        $assignedVehicules =  DB::select("SELECT *, users.name as usname, family_members.name as famname, cars.brand as carbrand, cars.model as carmodel FROM assigned_vehicules, users, family_members,  cars WHERE assigned_vehicules.user_id = users.id and assigned_vehicules.family_member_id = family_members.id and assigned_vehicules.car_id = cars.id;");
        
        return view('admin.assigned_vehicle.index', compact('assignedVehicules'));
    }


    // public function show($id)
    // {
    //     $car_images = CarsImages::findOrFail($id);

    //     return view('admin.car_image.show', compact('car_images'));
    // }

    public function create()
    {
        $cars = Cars::all();
        $users = User::all();
        $family_members = FamilyMembers::all();
        return view('admin.assigned_vehicle.create', compact('cars', 'users', 'family_members'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_id' => ['required'],
            'user_id' => ['required'],
            'family_member_id' => ['required']
        ]);

        

        AssignedVehicules::create([
            'car_id' => $request->input('car_id'),
            'user_id' => $request->input('user_id'),
            'family_member_id' => $request->input('family_member_id')
        ]);

        return redirect('/assigned_vehicle')->with('success', 'Véhicule assigné ajoutée avec succès.');
    }


    // public function destroy($id)
    // {
    //     CarsImages::destroy($id);
    //     return redirect('/carimage')->with('success', "L'image a bien été supprimée !");
    
    // }
}

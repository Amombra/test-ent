<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\User;
use App\Models\CarsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        $users = User::all();
        $proprietaires = DB::select("SELECT *, users.name as pname, cars.id as cid FROM  cars, users WHERE cars.user_id = users.id");
        return view('admin.car.index', compact('cars', 'proprietaires'));
    }


    public function show($id)
    {
        $cars = Cars::findOrFail($id);
        $users = User::all();

        $car_images = DB::select("SELECT photo FROM cars_images, cars WHERE cars_images.car_id = cars.id and cars.id = '$id'");

        $assigned_vehicules = DB::select("SELECT users.name as usname, users.photo as userimage FROM assigned_vehicules, users, family_members,  cars WHERE assigned_vehicules.user_id = users.id and assigned_vehicules.family_member_id = family_members.id and assigned_vehicules.car_id = cars.id and cars.id = '$id'");
        return view('admin.car.show', compact('cars', 'users', 'car_images', 'assigned_vehicules'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.car.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'year_manufacture' => ['required', 'string', 'max:255'],
            'serial_number' => ['required', 'string', 'max:255'],
            'mileage' => ['required', 'string', 'max:255'],
            'fuel_type' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
        ]);

        Cars::create([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year_manufacture' => $request->input('year_manufacture'),
            'serial_number' => $request->input('serial_number'),
            'mileage' => $request->input('mileage'),
            'fuel_type' => $request->input('fuel_type'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('car')->with('success', 'Véhicule ajoutée avec succès.');
    }

    public function edit($id)
    {
        $cars = Cars::findOrFail($id);
        $users = User::all();
        return view('admin.car.edit', compact('cars', 'users'));
    }

    public function update(Request $request, $id)
    {
        // Validez les données du formulaire ici
        $request->validate([
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'year_manufacture' => ['required', 'string', 'max:255'],
            'serial_number' => ['required', 'string', 'max:255'],
            'mileage' => ['required', 'string', 'max:255'],
            'fuel_type' => ['required', 'string', 'max:255'],
            'user_id' => ['required'],
        ]);

        $car = Cars::findOrFail($id);
        $car->update([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'year_manufacture' => $request->input('year_manufacture'),
            'serial_number' => $request->input('serial_number'),
            'mileage' => $request->input('mileage'),
            'fuel_type' => $request->input('fuel_type'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('car')->with('success', 'Voiture mise à jour avec succès.');
    }

    public function destroy($id)
    {
        Cars::findOrFail($id)->delete();

        return redirect()->route('car')->with('success', 'Voiture supprimée avec succès.');
    }



    //

    public function showImageForm($id)
    {
        $car = Cars::findOrFail($id);
        return view('admin.car.add_image', compact('car'));
    }

    public function uploadImages(Request $request, $id)
    {
        $car = Cars::findOrFail($id);

        $request->validate([
            'photo.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        foreach ($request->file('photo') as $photo) {
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->move(public_path('public/photos/cars'), $fileName);
    
            CarsImages::create([
                'car_id' => $car->id,
                'photo' => $fileName,
            ]);
        }

        return redirect()->route('admin.car.index')->with('success', 'Images ajoutées avec succès.');
    }
}

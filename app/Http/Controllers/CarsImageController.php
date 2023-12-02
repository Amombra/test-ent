<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\CarsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarsImageController extends Controller
{
    public function index()
    {
        $car_images = CarsImages::all();
        $cars = Cars::all();
        $cars_fs = DB::select("SELECT *, cars.brand as cbrand, cars_images.id as ciid, cars.model as cmodel FROM cars_images, cars WHERE cars_images.car_id=cars.id");
        return view('admin.car_image.index', compact('car_images', 'cars', 'cars_fs'));
    }


    public function show($id)
    {
        $car_images = CarsImages::findOrFail($id);

        return view('admin.car_image.show', compact('car_images'));
    }

    public function create()
    {
        $car_images = CarsImages::all();
        $cars = Cars::all();
        return view('admin.car_image.create', compact('car_images', 'cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo'=> ['required','mimes:png,jpg,jpeg','image','max:2048'],
            'car_id' => ['required']
        ]);

        $fileName = $request->photo->getClientOriginalName();
        $request->photo->move(public_path('public/photos/carimages'), $fileName);

        CarsImages::create([
            'photo' => $fileName,
            'car_id' => $request->input('car_id')
        ]);

        return redirect('/carimage')->with('success', 'image ajoutée avec succès.');
    }


    public function destroy($id)
    {
        CarsImages::destroy($id);
        return redirect('/carimage')->with('success', "L'image a bien été supprimée !");
    
    }
}

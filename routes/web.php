<?php

use App\Http\Controllers\AssignedVehiculeController;
use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarsImageController;
use App\Http\Controllers\FamilyMemberController;
use App\Http\Controllers\UserController;
use App\Models\FamilyMembers;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
// Route::group(['middleware' => ['auth', 'admin']], function (){
    Route::get('/dashboard-admin', function () {
        $user = Auth::user();
        $users = User::all();
        return view('admin.dashboard',  compact('user', 'users'));
    });
    Route::get('/dashboard-user', function () {
        $user = Auth::user();
        $users = User::all();
        return view('user.dashboard',   compact('user', 'users'));
    });


    Route::get('/edit-user/{id}', [App\Http\Controllers\UserController::class,'edituser'])->name('edit-user');
    Route::put('update-user/{id}', [UserController::class, 'updateuser']);
    

    Route::post('/users', [App\Http\Controllers\UserController::class, 'indexus'])->name('user');
    Route::resource('/utilisateurs', UserController::class);
    Route::get('/add-users', [App\Http\Controllers\UserController::class, 'create']);

    




Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::resource('/utilisateur', UserController::class);
Route::get('/add-user', [App\Http\Controllers\UserController::class, 'create']);


Route::resource('/cars', CarController::class);
Route::get('/car', [App\Http\Controllers\CarController::class, 'index'])->name('car');
Route::get('/add-car', [App\Http\Controllers\CarController::class, 'create']);

Route::resource('/membres', FamilyMemberController::class);
Route::get('/membre', [App\Http\Controllers\FamilyMemberController::class, 'index'])->name('membre');
Route::get('/add-membre', [App\Http\Controllers\FamilyMemberController::class, 'create']);


Route::get('/cars-images/{car}', [CarController::class, 'showImageForm']);
Route::post('/cars-images/{car}', [CarController::class, 'uploadImages']);


Route::resource('/carimages', CarsImageController::class);
Route::get('/carimage', [App\Http\Controllers\CarsImageController::class, 'index'])->name('carimage');
Route::get('/add-carimage', [App\Http\Controllers\CarsImageController::class, 'create']);


Route::resource('/assigned_vehicles', AssignedVehiculeController::class);
Route::get('/assigned_vehicle', [App\Http\Controllers\AssignedVehiculeController::class, 'index'])->name('ssigned_vehicle');
Route::get('/add-assigned_vehicle', [App\Http\Controllers\AssignedVehiculeController::class, 'create']);
Route::get('/add-assigned_vehicle/{id}', [App\Http\Controllers\AssignedVehiculeController::class, 'create']);

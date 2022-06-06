<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

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
    return Inertia::render('Home');
});

Route::get('/users', function (Request $request) {
    return Inertia::render('Users/Index', [
        'users' => \App\Models\User::query()->when($request->input('search'), function ($query, $search) {
            $query->where('name', 'like', "%" . $search . "%");
        })
            ->select('name', 'email', 'id')
            ->paginate(3),
        'filters' => $request->only(['search'])
    ]);
});


Route::get('/users/create', function () {
    return Inertia::render('Users/Create', []);
});

Route::post('/users/store', function (Request $request) {
    $attributes = $request->validate([
        'name' => 'required',
        'email' => ['required','email'],
        'password' => 'required',
    ]);
    \App\Models\User::create($attributes);
    return redirect('/users');
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
Route::get('/contact_us', function () {
    return Inertia::render('ContactUs');
});
Route::post('/logout', function () {
    dd('logging the user out');
});

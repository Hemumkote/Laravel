<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route::post("/login", function (Request $request) {
//     $request->validate(
//         [
//             'email' => ['required', 'email'],
//             'password' => ['required'],
//             'device_name' => ['required']
//         ]
//     );
//     $user = User::where('email', $request->email)->first();
// })
// ;
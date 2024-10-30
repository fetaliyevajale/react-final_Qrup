<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::post('/user/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        return response()->json(['success' => true, 'token' => $user->createToken('YourAppName')->plainTextToken, 'role' => $user->role]);
    }

    return response()->json(['success' => false, 'message' => 'Email və ya şifrə yanlışdır.'], 401);
});

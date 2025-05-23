<?php

namespace App\Http\Controllers\API;

// use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }


    public function loginUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            dd('email yoq');
            return redirect()->back()->withErrors(['message' => 'This email adress does not exist !'])->withInput();

        }

        if (!Hash::check($request->password, $user->password)) {
            dd('parol xato');
            return redirect()->back()->withErrors(['message' => 'The password is incorrect !'])->withInput();
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return redirect()->route('home')->with('success', 'Logged in successful.');

    }


    public function logoutUser(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out']);
    }

    public function showRegister()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showHome()
    {
        return view('home');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Login methods
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Account not found.',
        ])->onlyInput('email');
    }

    // Registration methods
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'admin_token' => 'required|exists:users,admin_token',
            'school_code' => 'required|exists:schools,school_code',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $school = School::where('school_code', $request->school_code)->first();
        if (!$school) {
            return back()->withErrors(['school_code' => 'Invalid school code.']);
        }

        $adminUser = User::where('admin_token', $request->admin_token)->first();
        if (!$adminUser) {
            return back()->withErrors(['admin_token' => 'Invalid admin token.']);
        }

        if ($adminUser->school_id !== $school->id) {
            return back()->withErrors(['admin_token' => 'Admin token does not match the provided school code.']);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'school_id' => $school->id,
            'password' => bcrypt($request->password),
            'admin_token' => null,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Auth::login($user);
        return redirect()->intended('dashboard');
    }

    // Logout method
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
  public function index()
  {
    return view('login');
  }

  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'string', 'email'],
      'password' => ['required', 'string'],
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect('/allthreads');
    };

    return back()->withErrors([
      'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
    ])->onlyInput('email');
  }

  public function create()
  {
    return view('register');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'unique:users,email'],
      'password' => ['required', 'min:8', 'confirmed'] 
    ]);


    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
      $request->session()->regenerate();
      return redirect()->route('login');

    }

  }
      
}
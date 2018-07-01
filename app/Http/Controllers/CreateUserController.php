<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 	
	/**
     * Afficher le formulaire d'inscription
    */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

 	/**
     * Stocker l'utilisateur
    */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        // auth()->login($user);
        
        return redirect()->to('/');
    }
}

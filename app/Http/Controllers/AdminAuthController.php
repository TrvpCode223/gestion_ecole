<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; // Le modèle Admin utilise maintenant la table 'users'
use App\Models\User; // Le modèle Admin utilise maintenant la table 'users'
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Vérifier l'unicité dans la table 'users'
            'password' => 'required|string|min:8|confirmed',
            'telephone' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $admin = Admin::create([
            'name' => $request->nom,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'role' => 'administrateur',
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'L\'administrateur s\'est enregistré avec succès.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirection après une connexion réussie
            return redirect()->route('home');
        }

        // Redirection avec message d'erreur si la connexion échoue
        return redirect()->back()->withErrors(['email' => 'Les informations d\'identification sont incorrectes.']);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Admin logged out successfully');
    }

    public function me()
    {
        return response()->json(Auth::user());
    }
}

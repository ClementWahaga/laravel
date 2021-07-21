<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MedecinController extends Controller
{
    
    public function show($id)
    {
        return view('medecin', [
            'medecin' => medecin::findOrFail($id)
        ]);
    }


    public function create()
    {
        return view('medecinform');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'specialite'=>'required|max:255'
        ]);        

        $medecin = new \App\Models\medecins;
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->specialite = $request->specialite;
        $medecin->save();

        return "C'est bien enregistré !";

    }
}

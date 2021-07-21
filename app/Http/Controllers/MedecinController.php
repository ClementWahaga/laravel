<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MedecinController extends Controller
{
    
    public function display()
    {
         
    }


    public function create()
    {
        return view('medecin.create');
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'bail|required|nom',
            'prenom' => 'bail|required|prenom',
            'specialite'=>'bail|required|specialité'
        ]);        

        $medecin = new \App\Models\medecins;
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->specialite = $request->specialite;
        $medecin->save();

        return "C'est bien enregistré !";

    }
}

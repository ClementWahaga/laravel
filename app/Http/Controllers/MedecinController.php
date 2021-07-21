<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MedecinController extends Controller
{
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

        $contact = new \App\Models\medecins;
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->specialite = $request->specialite;
        $contact->save();
        
        return "C'est bien enregistré !";

    }
}

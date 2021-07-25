<?php

namespace App\Http\Controllers;

use App\Models\medecins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Medecin;

class MedecinController extends Controller
{
    
    public function show()
    {
        $medecin = DB::table('medecin')->get();
        return view('medecin')->with(compact('medecin'));
    }


    public function create()
    {
        return view('medecin');
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

    public function destroy(medecins $medecin)
    {
        $medecin = DB::table('medecin')->get(id)->delete();

        return redirect()->route('medecin');
    }
}
 
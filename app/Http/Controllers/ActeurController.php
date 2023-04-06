<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;

class ActeurController extends Controller
{
    public function allActeurs()
    {
        return Acteur::get();
    }   
    

    public function home()
    {
        $acteurs = $this->allActeurs();

        return view('homeActeurs', compact('acteurs'));
    }    

    public function adminActeurs()
    {
        $acteurs = $this->allActeurs();

        return view('adminActeurs', compact('acteurs'));
    }

    

    public function showOneActeur($id)
    {
        $acteur = Acteur::find($id);
        return view('oneActeur', compact('acteur'));
    }

    public function addActeur($id = 0, Request $request)
    {

        $acteur = (Acteur::find($id)) ? Acteur::find($id) : new Acteur();

        //Si la route utilisé envoie des données (POST), on traite les données.
        if ($request->isMethod('post')) {
            $acteur->name = $request->name;
            $acteur->description = $request->description;
            $acteur->picture = $request->picture;

            $acteur->save();

            return redirect()->route('allActeurs');
        }

        //Sinon on affiche le fromulaire.
        return view('addActeur', compact('acteur'));
    }

    public function deleteActeur($id)
    {

        $acteur = Acteur::findOrFail($id);

        $acteur->delete();

        return redirect()->route('allActeurs');
    }
}

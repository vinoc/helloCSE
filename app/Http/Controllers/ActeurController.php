<?php

namespace App\Http\Controllers;

use App\Models\Acteur;
use Illuminate\Http\Request;

class ActeurController extends Controller
{
    public function accueilAdmin(){
$acteurs = Acteur::get();
        return view('adminActeurs', ['acteurs'=> $acteurs]);
    }
}

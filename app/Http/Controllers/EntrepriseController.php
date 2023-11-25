<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function liste() {
        $entreprise = (new Entreprise())->liste();

        return view('entreprise.liste', ['entreprise' => $entreprise]);
    }

    public function nouveau() {
        return view('entreprise.nouveau');
    }

    public function ajouter(Request $request)
    {
        (new Entreprise())->insertion($request);
        return redirect()->route('entreprise.liste');  
    }
}

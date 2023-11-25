<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Fournisseur;
use App\Models\PrixProduit;

class produitController extends Controller
{
    public function liste() {
        $produit = (new Produit())->liste();

        return view('produit.liste', ['produit' => $produit]);
    }

    public function nouveau() {
        return view('produit.nouveau');
    }

    public function modifier() {
        $produit = Produit::where('idProduit',$idProduit)->get();

        return view('produit.modifier', ['produit' => $produit]);
    }

    public function ajouter(Request $request)
    {
        (new Produit())->insertion($request);
        return redirect()->route('produit.liste');  
    }

    public function update(Request $request)
    {
        (new Produit())->update($request);
        return redirect()->route('produit.liste');  
    }
}

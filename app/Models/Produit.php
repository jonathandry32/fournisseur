<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idProduit';
    protected $fillable = ['idProduit', 'nom', 'unite','prix'];

    public function insertion(Request $request)
    {
        Produit::create([
            'nom' => $request->nom,
            'unite' => $request->unite,
            'prix' => $request->prix
        ]);
    }

    public function liste()
    {
        $produit = Produit::all();
        return $produit;
    }

    public function update(Request $request)
    {
        PrixProduit::where('idProduit',$request->idProduit)->update(['nom'=>$request->nom,'unite'=>$request->unite,'prix'=>$request->prix]);
    }
}

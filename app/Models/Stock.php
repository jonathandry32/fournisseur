<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idStock';
    protected $fillable = ['idStock', 'idProduit', 'quantite','prixUnitaire','type','date'];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'idProduit', 'idProduit');
    }

    public function liste()
    {
        $stock = Stock::with('produit')->get();
        return $stock;
    }

    public function insertion(Request $request)
    {
        Stock::create([
            'idProduit' => $request->idProduit,
            'quantite' => $request->quantite,
            'prixUnitaire' => $request->prixUnitaire,
            'type' => $request->type,
            'date' => $request->date
        ]);
    }
}

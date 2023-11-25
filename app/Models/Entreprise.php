<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'idEntreprise';
    protected $fillable = ['idEntreprise', 'nom', 'email','telephone','adresse'];

    public function insertion(Request $request)
    {
        Entreprise::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse
        ]);
    }

    public function liste()
    {
        $entreprise = Entreprise::all();
        return $entreprise;
    }
}

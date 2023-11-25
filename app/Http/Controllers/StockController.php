<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function nouveau()
    {
        $produit =  (new Produit())->liste();
        return view('stock.nouveau', [
            'produit' => $produit
        ]);
    }
    
    public function insertion(Request $request)
    {
        (new Stock())->insertion($request);
        return redirect()->route('stock.liste');  
    }
}

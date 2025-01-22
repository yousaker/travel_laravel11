<?php

namespace App\Http\Controllers;

use App\Models\ReservationProduit;
use Illuminate\Http\Request;

class ReservationProduitController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'id_produit' => 'required|exists:products,id_produit',
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
        ]);

        // Création de la réservation
        ReservationProduit::create([
            'id_produit' => $request->id_produit,
            'name' => $request->name,
            'prenom' => $request->prenom,
            'tel' => $request->tel,
        ]);

        return redirect()->back()->with('Add', 'Réservation réussie!');
    }
}

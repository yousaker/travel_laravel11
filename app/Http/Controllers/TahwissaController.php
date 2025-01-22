<?php


namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tahwiss;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TahwissaController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données envoyées par le formulaire
        $request->validate([
            'titre' => 'required|string|max:255',
            'categorie' => 'required|exists:categories,id',
            'wilaya' => 'required|string|max:100',
            'adresse' => 'required|string|max:255',
            'numero_telephone' => 'required|string|max:20',
            'prix' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'image_tahwissa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Gérer l'upload de l'image
        if ($request->hasFile('image_tahwissa')) {
            $imagePath = $request->file('image_tahwissa')->store('images/tahwissa', 'public');
        }

        // Enregistrer la publication dans la base de données
        $tahwissa = new Tahwiss();
        $tahwissa->titre = $request->input('titre');
        $tahwissa->categorie_id = $request->input('categorie');
        $tahwissa->id_user = auth()->id(); // Utilisateur authentifié
        $tahwissa->wilaya = $request->input('wilaya');
        $tahwissa->adresse = $request->input('adresse');
        $tahwissa->numero_telephone = $request->input('numero_telephone');
        $tahwissa->prix = $request->input('prix');
        $tahwissa->description = $request->input('description');
        $tahwissa->image_tahwissa = $imagePath;
        $tahwissa->save();

        // Rediriger vers une page de succès ou afficher un message
        return redirect()->route('tahwissa.index')->with('success', 'Tahwissa ajoutée avec succès!');
    }
}

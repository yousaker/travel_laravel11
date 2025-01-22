<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Category;
class ProductController extends Controller
{
    // Afficher tous les produits

   

    // Ajouter un nouveau produit
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric|min:0',
        'telephone' => 'required|string|max:20',
        'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation de l'image
    ]);

    $imagePath = null;

    // Si une image est téléchargée
    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('images/products', 'public');
    }

    Product::create([
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'prix' => $request->input('prix'),
        'telephone' => $request->input('telephone'),
        'id_user' => auth()->id(),
        'images' => $imagePath, // Sauvegarde du chemin de l'image
    ]);

    return redirect()->back()->with('Add', 'Produit ajouté avec succès !');
}



}

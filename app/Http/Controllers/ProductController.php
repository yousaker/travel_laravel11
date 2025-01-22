<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Category;
class ProductController extends Controller
{
    // Afficher tous les produits

    public function show()
    {
        // Récupérer les informations nécessaires depuis la base de données ou autre source
        $categories = Category::all();
        // Récupérer les 6 premières Tahwiss avec leurs relations
        $products = Product::with('user')->take(6)->get();

        // Passer les données à la vue
        return view('ShowAllProduct', compact('products','categories'));
    }
    public function loadMoreProducts(Request $request)
    {
        $offset = $request->input('offset', 6);
        $limit = $request->input('limit', 3);

        // Récupérer les produits supplémentaires
        $products = Product::with('user')
            ->skip($offset)
            ->take($limit)
            ->get();

        return response()->json($products);
    }
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

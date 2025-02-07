<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tahwiss;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Product;
class TahwissaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('user')->latest()->take(3)->get();
        // Récupérer toutes les Tahwiss avec leurs relations
        $tahwiss = Tahwiss::with(['category', 'user'])->latest()->take(3)->get();


        // Passer les données à la vue
        return view('dashboard', compact('categories', 'tahwiss','products'));
    }
    public function show()
    {
        // Récupérer les informations nécessaires depuis la base de données ou autre source
        $categories = Category::all();

        // Récupérer les 6 premières Tahwiss avec leurs relations
        $tahwiss = Tahwiss::with(['category', 'user'])->take(6)->get();

        // Passer les données à la vue
        return view('ShowAlltahwissa', compact('categories', 'tahwiss'));
    }
    public function loadMore(Request $request)
{
    $offset = $request->input('offset', 6);
    $limit = $request->input('limit', 3);

    // Récupérer les Tahwiss supplémentaires
    $tahwiss = Tahwiss::with(['category', 'user'])
        ->skip($offset)
        ->take($limit)
        ->get();

    return response()->json($tahwiss);
}
    public function welcome()
{
    $categories = Category::all();
    // Récupérer les données nécessaires pour la vue "welcome"
    $tahwiss = Tahwiss::with(['category', 'user'])->latest()->take(3)->get();

    $products = Product::with('user')->latest()->take(3)->get();

    return view('welcome', compact('categories', 'tahwiss','products'));
}
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
            'petite_description' => 'nullable|string|max:255',  // Nouveau champ
            'nombre_de_jours' => 'nullable|integer|min:0',     // Nouveau champ
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
        $tahwissa->categorie = $request->input('categorie');
        $tahwissa->id_user = auth()->id(); // Utilisateur authentifié
        $tahwissa->wilaya = $request->input('wilaya');
        $tahwissa->adresse = $request->input('adresse');
        $tahwissa->numero_telephone = $request->input('numero_telephone');
        $tahwissa->prix = $request->input('prix');
        $tahwissa->petite_description = $request->input('petite_description');  // Nouveau champ
        $tahwissa->nombre_de_jours = $request->input('nombre_de_jours');       // Nouveau champ
        $tahwissa->description = $request->input('description');
        $tahwissa->image_tahwissa = $imagePath;
        $tahwissa->save();

        // Rediriger vers une page de succès ou afficher un message
        return redirect()->back()->with('Add', value: 'Tahwissa ajoutée avec succès!');
    }
}
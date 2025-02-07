<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahwiss;
use Illuminate\Support\Facades\Auth;
use App\Models\ReservationTahwissa;
use App\Models\Category;
use App\Models\Product;
use App\Models\ReservationProduit;

class DashboardController extends Controller
{
    public function index() {
        $categories = Category::all();
        // Get the count of Tahwissa and Products for the authenticated user
        $tahwissaCount = Tahwiss::where('id_user', Auth::id())->count();
        $productCount = Product::where('id_user', Auth::id())->count();

        // Get the reservations count for Tahwissa (for the authenticated user)
        $reservationsCount = Tahwiss::where('id_user', Auth::id())
            ->withCount('reservations')
            ->get()
            ->sum('reservations_count');

        // Get the reservations count for Products (for the authenticated user)
        $reservationsProductCount = Product::where('id_user', Auth::id())
            ->withCount('reservationsProduits') // Assuming 'reservationsProduits' is the correct relationship
            ->get()
            ->sum('reservations_produits_count');

        // Calculate the total reservations (sum of both Tahwissa and Product reservations)
    $totalReservations = $reservationsCount + $reservationsProductCount;

    $reservationsData = ReservationTahwissa::whereHas('tahwessa', function($query) {
        $query->where('id_user', Auth::id());
    })
    ->get()
    ->groupBy(function($date) {
        return \Carbon\Carbon::parse($date->created_at)->format('Y-m-d'); // Format Jour-Mois-Année
    });

    // Préparer les données pour le graphique
    $labels = [];
    $data = [];
    foreach ($reservationsData as $day => $reservations) {
        $labels[] = $day;
        $data[] = $reservations->count();
    }
    $reservationsProductData = ReservationProduit::whereHas('product', function($query) {
        $query->where('id_user', Auth::id());
    })
    ->get()
    ->groupBy(function($date) {
        return \Carbon\Carbon::parse($date->created_at)->format('Y-m-d');
    });

    $labelsProduct = [];
    $dataProduct = [];
    foreach ($reservationsProductData as $day => $reservations) {
        $labelsProduct[] = $day;
        $dataProduct[] = $reservations->count();
    }

    return view('text', compact(
        'tahwissaCount',
        'productCount',
        'reservationsCount',
        'reservationsProductCount',
        'totalReservations', // Pass totalReservations to the view
        'labels',
        'data',
        'categories',
        'labelsProduct',
        'dataProduct',

    ));
    }


}

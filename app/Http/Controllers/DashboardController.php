<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tahwiss;
use Illuminate\Support\Facades\Auth;
use App\Models\ReservationTahwissa;
use App\Models\Category;
use App\Models\Product;
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

    // Calculate percentage increase (for example, comparing with the previous week/month)
    // For simplicity, let's assume you want to calculate the percentage increase from last week's reservations count.

    $previousWeekReservations = 100; // Replace this with actual logic to fetch last week's reservations count
    $percentageIncrease = 0;

    if ($previousWeekReservations > 0) {
        $percentageIncrease = (($totalReservations - $previousWeekReservations) / $previousWeekReservations) * 100;
    }

    // Get reservations per Tahwessa (grouped by Tahwessa ID for the authenticated user)
    $tahwessaReservations = ReservationTahwissa::selectRaw('id_tahwessa, COUNT(*) as total_reservations')
        ->whereHas('tahwessa', function($query) {
            $query->where('id_user', Auth::id()); // Ensure reservations are only for the authenticated user
        })
        ->groupBy('id_tahwessa')
        ->get();

    $labels = [];
    $data = [];

    // Prepare the data for the chart
    foreach ($tahwessaReservations as $reservation) {
        $labels[] = 'Tahwessa ' . $reservation->id_tahwessa;
        $data[] = $reservation->total_reservations;
    }

    // Pass all the data to the view, including totalReservations and percentageIncrease
    return view('text', compact(
        'tahwissaCount',
        'productCount',
        'reservationsCount',
        'reservationsProductCount',
        'totalReservations', // Pass totalReservations to the view
        'percentageIncrease', // Pass percentageIncrease to the view
        'labels',
        'data',
        'categories'
    ));
    }


}

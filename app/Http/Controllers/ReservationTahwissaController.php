<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ReservationTahwissa;

class ReservationTahwissaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
            'id_tahwessa' => 'required|exists:tahwiss,id'
        ]);

        ReservationTahwissa::create($validated);

        return redirect()->back()
            ->with('Add', __('tahwissa.reservation_success'));
    }
}

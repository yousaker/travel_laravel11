<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationProduit extends Model
{
    use HasFactory;

    protected $table = 'reservationproduit'; // Nom de la table

    protected $fillable = [
        'id_produit',
        'name',
        'prenom',
        'tel',
    ];

    // Relation avec le produit
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produit', 'id_produit');
    }
}

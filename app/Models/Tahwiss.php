<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tahwiss extends Model
{
    use HasFactory;

    protected $table = 'tahwiss';

    protected $fillable = [
        'titre',
        'categorie',
        'id_user',
        'wilaya',
        'adresse',
        'numero_telephone',
        'prix',
        'description',
        'petite_description',  // Nouveau champ
        'nombre_de_jours',     // Nouveau champ
        'image_tahwissa'
    ];

    // Relation avec la catégorie
    // Dans le modèle Tahwiss
public function category()
{
    return $this->belongsTo(Category::class, 'categorie', 'id');
}

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function reservations()
    {
        return $this->hasMany(ReservationTahwissa::class, 'id_tahwessa');
    }
}

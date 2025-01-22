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
<<<<<<< HEAD
        'petite_description',  // Nouveau champ
        'nombre_de_jours',     // Nouveau champ
=======
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d
        'image_tahwissa'
    ];

    // Relation avec la catégorie
<<<<<<< HEAD
    // Dans le modèle Tahwiss
public function category()
{
    return $this->belongsTo(Category::class, 'categorie', 'id');
}
=======
    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie', 'id');
    }
>>>>>>> fe1a1c2c2534ebdb1e2a6b0ab63fa87ec0b09e5d

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

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
        'image_tahwissa'
    ];

    // Relation avec la catégorie
    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie', 'id');
    }

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

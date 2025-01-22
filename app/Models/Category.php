<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Nom de la table

    protected $primaryKey = 'id_Categories'; // Définir la clé primaire

    protected $fillable = ['name_Categories']; // Colonnes modifiables

    public $timestamps = true; // Active les colonnes created_at et updated_at
}

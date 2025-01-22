<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;

    // Table associée
    protected $table = 'products';

    // Clé primaire personnalisée
    protected $primaryKey = 'id_produit';

    // Colonnes qui peuvent être remplies en masse
    protected $fillable = [
        'name',
        'description',
        'prix',
        'telephone',
        'id_user',
        'images', // جديد
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    // In Product model:
public function reservationsProduits()
{
    return $this->hasMany(ReservationProduit::class, 'id_produit');
}

}

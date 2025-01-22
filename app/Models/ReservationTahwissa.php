<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ReservationTahwissa extends Model
{
    use HasFactory;
    protected $table = 'reservation_tahwissa';
    protected $fillable = [
        'name',
        'prenom',
        'tel',
        'id_tahwessa'
    ];

    /**
     * Relation avec le modèle Tahwissa
     */
    public function tahwessa()
    {
        return $this->belongsTo(Tahwiss::class, 'id_tahwessa');
    }
}

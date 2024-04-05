<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Commande extends Model
{
    use HasFactory;
    use HasUuids;

//    protected $fillable = [
//        'panier_uuid',
//        'produit_uuid',
//        'quantity',
//    ];

    public function panier(): BelongsTo
    {
        return $this->belongsTo(Panier::class);
    }
    public function produit(): HasOne
    {
        return $this->hasOne(Produit::class);
    }

}

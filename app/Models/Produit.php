<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Produit extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'designation',
        'description',
        'price',
        'image',
        'category',
        'materials',
        'artisan_uuid',
    ];


    public function artisan(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class panier extends Model
{
    use HasFactory;
    use HasUuids;
//    protected $fillable = [
//        'uuid',
//        'user_uuid',
//        'status',
//        'last_update',
//    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function commandes(): HasMany
    {
        return $this->hasMany(Commande::class);
    }
}

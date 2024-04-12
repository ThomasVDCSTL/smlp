<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artisan extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'user_uuid',
        'products',
        'products_sold',
        'avis',
        'note',
        'story',
        'production_style',
        'materials',
    ];
    protected $primaryKey = 'user_uuid';
    protected $keyType = 'string';

    protected $casts = [
        'user_uuid' => 'string',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

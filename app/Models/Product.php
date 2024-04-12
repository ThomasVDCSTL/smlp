<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
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

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    protected $casts = [
        'uuid' => 'string',
    ];

    public function artisan(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

}

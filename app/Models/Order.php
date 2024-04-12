<?php

namespace App\Models;

use Composer\Autoload\ClassLoader;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'status',
    ];
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    protected $casts = [
        'uuid' => 'string',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->using(Order_product::class)->withPivot('quantity');
    }
}

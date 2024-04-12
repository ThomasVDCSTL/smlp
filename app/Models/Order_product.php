<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Thiagoprz\CompositeKey\HasCompositeKey;

class Order_product extends Pivot
{
    use HasFactory;
    use HasCompositeKey;


//
//    protected $fillable = [
//        'panier_uuid',
//        'produit_uuid',
//        'quantity',
//    ];
//    protected $primaryKey = ['panier_uuid','produit_uuid'];
//    public $incrementing = false;

public $table = 'order_product';
    protected $fillable = [
        'order_uuid',
        'product_uuid',
        'quantity',
    ];
    protected $primaryKey = ['order_uuid','product_uuid'];
    public $incrementing = false;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }


}

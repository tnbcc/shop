<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CartItem
 *
 * @property-read \App\Models\ProductSku $productSku
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
class CartItem extends Model
{
    protected $fillable = ['amount'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function productSku()
    {
        return $this->belongsTo(ProductSku::class);
    }
}

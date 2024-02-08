<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель товаров
 */

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'about',
        'price',
        'deleted',
        'active'
    ];

    public function merchandises_photos() {
        return $this->hasMany(MerchandisePhoto::class);
    }

    public function scopeGetLastMerchendise($query, $numbers){
        return $query->with('merchandises_photos')->where('active', 1)
            ->where('deleted', 0)
            ->orderBy('created_at')
            ->take($numbers)
            ->get();
    }
}

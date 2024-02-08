<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель фото товаров
 */

class MerchandisePhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchandise_id',
        'position',
        'url',
        'name'
    ];

    public function merchandises() {
        return $this->belongsTo(Merchandise::class);
    }
}

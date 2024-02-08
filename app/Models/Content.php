<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель контента
 */

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'type',
        'deleted'
    ];

    public function events() {
        return $this->belongsTo(Event::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель тегов
 */

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag',
        'deleted'
    ];

    public $timestamps = false;

    public function events() {
        return $this->belongsToMany(Event::class);
    }

    public function residents() {
        return $this->belongsToMany(Resident::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель ссылок резидентов
 */

class ResidentLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'social',
        'link',
        'resident_id'
    ];

    public function residents() {
        return $this->belongsTo(Resident::class);
    }
}

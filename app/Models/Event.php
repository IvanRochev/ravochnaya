<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель мероприятий
 */

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'name',
        'deleted',
        'active'
    ];

    public function contents() {
        return $this->hasMany(Content::class);
    }

    public function residents() {
        return $this->belongsToMany(Resident::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}

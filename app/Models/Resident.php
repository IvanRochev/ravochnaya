<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Модель резидентов
 */

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname',
        'fio',
        'role',
        'about',
        'photo',
        'deleted',
        'active'
    ];

    public function events() {
        return $this->belongsToMany(Event::class);
    }
    
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function resident_links() {
        return $this->hasMany(ResidentLink::class);
    }

    public function articles() {
        return $this->belongsToMany(Article::class);
    }
}
